<?php

$config = [
    'id' => 'plyr-console',
    'basePath' => dirname( __DIR__ ),
    'bootstrap' => [ 'log' ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],
        'db' => require( __DIR__ . '/common/db.php' ),
    ],
    'params' => require( __DIR__ . '/common/params.php' ),
];

if ( YII_ENV_DEV ) {
    $config[ 'bootstrap' ][] = 'gii';
    $config[ 'modules' ][ 'gii' ] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
