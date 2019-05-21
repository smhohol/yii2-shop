<?php

namespace frontend\services\verify;

use common\entities\User;
use DomainException;
use RuntimeException;
use Yii;
use yii\base\InvalidArgumentException;
use yii\mail\MailerInterface;

class  VerifyEmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function resend($email)
    {
        $user = User::findOne([
            'email' => $email,
            'status' => User::STATUS_INACTIVE
        ]);

        if (!$user) {
            throw new DomainException('User is not found.');
        }

        $sent = $this->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setTo($email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();

        if (!$sent) {
            throw new RuntimeException('Sending error.');
        }
    }

    public function validateToken($token)
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Verify email token cannot be blank.');
        }

        if (!User::findByVerificationToken($token)) {
            throw new InvalidArgumentException('Wrong verify email token.');
        }
    }

    public function verify($token): User
    {
        $user = User::findByVerificationToken($token);
        if (!$user) {
            throw new DomainException('User is not found.');
        }

        $user->setActiveStatus();

        if (!$user->save()) {
            throw new RuntimeException('Saving error.');
        }

        return $user;
    }
}