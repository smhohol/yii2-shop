<?php

namespace frontend\services\verify;

use common\entities\User;
use yii\base\InvalidArgumentException;

class  VerifyEmailService
{
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
            throw new \DomainException('User is not found.');
        }

        $user->setActiveStatus();

        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }

        return $user;
    }
}