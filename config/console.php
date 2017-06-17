<?php

$config = [
    'id' => 'console',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'plyr1705\interfaces\console\controllers',
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
        'db' => require( __DIR__ . '/shared/database.php' ),
    ],
    'params' => require( __DIR__ . '/shared/params.php' ),
    'aliases' => require( __DIR__ . '/shared/aliases.php' ),
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => null,
            'migrationNamespaces' => [
                'plyr1705\infrastructure\migrations',
            ],
        ],
    ],
];

return $config;
