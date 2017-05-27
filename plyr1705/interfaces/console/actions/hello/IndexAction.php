<?php

namespace plyr1705\interfaces\console\actions\hello;

use yii\base\Action;

/**
 * Class IndexAction
 *
 * @package plyr1705\interfaces\console\actions\hello
 */
class IndexAction extends Action
{
    public function run( $message = 'hello world' )
    {
        echo $message . "\n";
    }
}