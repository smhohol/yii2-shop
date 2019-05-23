<?php


namespace shop\forms\auth;

use shop\entities\User;
use yii\base\Model;

class ResendVerificationEmailForm extends Model
{
    public $email;

    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => User::class,
                'filter' => ['status' => User::STATUS_INACTIVE],
                'message' => 'There is no user with this email address.'
            ],
        ];
    }
}
