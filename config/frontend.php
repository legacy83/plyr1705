<?php

$config = [
    'id' => 'basic',
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
        'db' => require( __DIR__ . '/common/db.php' ),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<alias:\w+>' => 'site/<alias>',
            ],
        ],
    ],
    'params' => require( __DIR__ . '/common/params.php' ),
    'aliases' => [
        '@plyr1705' => '@app/plyr1705',
    ],
];

if ( YII_ENV_DEV ) {
    $config[ 'bootstrap' ][] = 'debug';
    $config[ 'modules' ][ 'debug' ] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => [ '127.0.0.1', '::1', '*' ],
    ];

    $config[ 'bootstrap' ][] = 'gii';
    $config[ 'modules' ][ 'gii' ] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => [ '127.0.0.1', '::1', '*' ],
    ];
}

return $config;
