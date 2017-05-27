<?php

$config = [
    'id' => 'plyr-console',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'plyr1705\interfaces\console\commands',
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
        'db' => require( __DIR__ . '/common/database.php' ),
    ],
    'params' => require( __DIR__ . '/common/params.php' ),
    'aliases' => require( __DIR__ . '/common/aliases.php' ),
];

if ( YII_ENV_DEV ) {
    $config[ 'bootstrap' ][] = 'gii';
    $config[ 'modules' ][ 'gii' ] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
