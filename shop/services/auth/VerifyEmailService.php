<?php

namespace shop\services\auth;

use shop\entities\user\User;
use shop\repositories\NotFoundException;
use shop\repositories\UserRepository;
use Yii;
use yii\base\InvalidArgumentException;
use yii\mail\MailerInterface;

class  VerifyEmailService
{
    private $mailer;
    private $users;

    public function __construct(UserRepository $users, MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        $this->users = $users;
    }

    public function resend($email)
    {
        $user = User::findOne([
            'email' => $email,
            'status' => User::STATUS_INACTIVE
        ]);

        if (!$user) {
            throw new NotFoundException('user is not found.');
        }

        $this->users->sendingVerifyEmail($user, $this->mailer, $email, Yii::$app->name);
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
            throw new NotFoundException('user is not found.');
        }

        $user->confirmEmailVerification();
        $this->users->save($user);

        return $user;
    }
}