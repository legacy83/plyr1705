<?php

$config = [
    'id' => 'web',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'plyr1705\interfaces\frontend\controllers',
    'bootstrap' => [ 'log' ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'mbnXXBurLUazc_WW1EtQxf0aDzI-JfB4',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'db' => require( __DIR__ . '/shared/database.php' ),
    ],
    'params' => require( __DIR__ . '/shared/params.php' ),
    'aliases' => require( __DIR__ . '/shared/aliases.php' ),
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
];

return $config;
