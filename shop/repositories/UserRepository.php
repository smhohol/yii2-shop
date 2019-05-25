<?php

namespace shop\repositories;

use shop\entities\User;
use RuntimeException;
use yii\mail\MailerInterface;

class UserRepository {
    public function save(User $user): void
    {
        if (!$user->save()) {
            throw new RuntimeException('Saving error.');
        }
    }

    public function sendingVerifyEmail(
        User $user,
        MailerInterface $mailer,
        string $email,
        string $appName
    ): void
    {
        $sent = $mailer
            ->compose(
                ['html' => 'auth/signup/confirm-html', 'text' => 'auth/signup/confirm-text'],
                ['user' => $user]
            )
            ->setTo($email)
            ->setSubject('Account registration at ' . $appName)
            ->send();

        if (!$sent) {
            throw new RuntimeException('Sending confirmation email error.');
        }
    }

    public function findByUsernameOrEmail($value): ?User
    {
        return User::find()->andWhere(['or', ['username' => $value], ['email' => $value]])->limit(1)->one();
    }
}