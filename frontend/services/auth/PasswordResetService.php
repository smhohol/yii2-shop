<?php
namespace frontend\services\auth;

use common\entities\User;
use DomainException;
use frontend\forms\PasswordResetRequestForm;
use frontend\forms\ResetPasswordForm;
use RuntimeException;
use Yii;
use yii\base\InvalidArgumentException;
use yii\mail\MailerInterface;

class PasswordResetService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function request(PasswordResetRequestForm $form): void
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $form->email,
        ]);

        if (!$user) {
            throw new DomainException('User is not found.');
        }

        $user->requestPasswordReset();

        if (!$user->save()) {
            throw new RuntimeException('Saving error.');
        }

        $sent = $this->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            ->setTo($user->email)
            ->setSubject('Password reset for ' . Yii::$app->name)
            ->send();

        if (!$sent) {
            throw new RuntimeException('Sending error.');
        }
    }

    public function validateToken($token): void
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Password reset token cannot be blank.');
        }

        if (!User::findByPasswordResetToken($token)) {
            throw new InvalidArgumentException('Wrong password reset token.');
        }
    }

    public function reset(string $token, ResetPasswordForm $form): void
    {
        $user = User::findByPasswordResetToken($token);
        if (!$user) {
            throw new DomainException('User is not found.');
        }
        $user->resetPassword($form->password);
        if (!$user->save()) {
            throw new RuntimeException('Saving error.');
        }
    }
}