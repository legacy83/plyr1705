<?php

namespace plyr1705\interfaces\console\commands;

use yii\console\Controller;

/**
 * Class HelloController
 *
 * @package plyr1705\interfaces\console\commands
 */
class HelloController extends Controller
{
    public function actionIndex( $message = 'hello world' )
    {
        echo $message . "\n";
    }
}