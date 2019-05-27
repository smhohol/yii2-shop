<?php

namespace shop\repositories;

use shop\entities\User\User;
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

    public function findByNetworkIdentity($network, $identity): ?User
    {
        return User::find()->joinWith('networks n')->andWhere(['n.network' => $network, 'n.identity' => $identity])->one();
    }

    public function get($id): User
    {
        return $this->getBy(['id' => $id]);
    }

    private function getBy(array $condition): User
    {
        if (!$user = User::find()->andWhere($condition)->limit(1)->one()) {
            throw new NotFoundException('User not found.');
        }

        return $user;
    }
}