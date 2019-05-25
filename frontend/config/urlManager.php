<?php
/** @var array $params */
return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        'about' => 'site/about',
        'contact' => 'contact/index',
        'signup' => 'auth/signup/request',
        'signup/<_a:resend|confirm>' => 'auth/signup/<_a>',
        '<_a:login|logout>' => 'auth/auth/<_a>',
        'reset-password' => 'auth/reset/request',
        'reset-password/confirm' => 'auth/reset/confirm',

        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_c>/<_a>',
    ],
];