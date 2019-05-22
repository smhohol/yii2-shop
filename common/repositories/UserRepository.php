<?php

namespace common\repositories;

use common\entities\User;
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
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setTo($email)
            ->setSubject('Account registration at ' . $appName)
            ->send();

        if (!$sent) {
            throw new RuntimeException('Sending confirmation email error.');
        }
    }
}