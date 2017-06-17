<?php

namespace plyr1705\interfaces\console\controllers;

use yii\console\Controller;

/**
 * Class HelloController
 *
 * @package plyr1705\interfaces\console\controllers
 */
class HelloController extends Controller
{
    public function actionIndex( $message = 'hello, world!' )
    {
        echo $message . "\n";
    }
}
