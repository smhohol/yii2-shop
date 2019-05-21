<?php
namespace common\bootstrap;

use frontend\services\contact\ContactService;
use frontend\services\auth\PasswordResetService;
use yii\base\BootstrapInterface;

class SetUp implements BootstrapInterface
{
    public function bootstrap($app): void
    {
        $container = \Yii::$container;

        $container->setSingleton(PasswordResetService::class);

        $container->setSingleton(ContactService::class, [], [
            $app->params['adminEmail']
        ]);
    }
}