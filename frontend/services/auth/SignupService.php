<?php
namespace frontend\services\auth;

use common\entities\User;
use common\repositories\UserRepository;
use frontend\forms\SignupForm;
use Yii;
use yii\mail\MailerInterface;

class SignupService
{
    private $mailer;
    private $users;

    public function __construct(UserRepository $users, MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        $this->users = $users;
    }

    public function signup(SignupForm $form): void
    {
        $user = User::signup(
            $form->username,
            $form->email,
            $form->password
        );

        $this->users->save($user);
        $this->users->sendingVerifyEmail($user, $this->mailer, $user->email, Yii::$app->name);
    }
}