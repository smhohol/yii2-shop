<?php
namespace shop\services\auth;

use shop\entities\User\User;
use shop\repositories\UserRepository;
use shop\forms\auth\SignupForm;
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