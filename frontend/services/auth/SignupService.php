<?php
namespace frontend\services\auth;

use common\entities\User;
use frontend\forms\SignupForm;
use Yii;

class SignupService
{
    public function signup(SignupForm $form): void
    {
        $user = User::signup(
            $form->username,
            $form->email,
            $form->password
        );

        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }

        $sent = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setTo($user->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Sending confirmation email error.');
        }
    }
}