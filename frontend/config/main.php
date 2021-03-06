<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'class' => 'common\components\Request',
            'web'=> '/frontend/web'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
/*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/'              => 'site/index',
                '<slug:[a-z-]+>' => 'site/category',
                '<id:\d+>'       => 'site/object',
            ],
        ],*/


        /*'urlManager'         => [
            'showScriptName'            => false,
            'enablePrettyUrl'           => true,
            'rules'                     => [
                '/'                           => 'site/index',
                'category/<slug:[a-z0-9-]+>' => 'site/category/<slug:[a-z0-9-]+>',
                '/rooms'        => 'site/rooms',
                '/services'     => 'site/services',
                '/gallery'      => 'site/gallery',
                '/about'        => 'site/about',
            ],
        ],*/
    ],
    'params' => $params,
];
