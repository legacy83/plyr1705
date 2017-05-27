<?php

namespace plyr1705\interfaces\backend\actions\hello;

use yii\base\Action;

/**
 * Class IndexAction
 *
 * @package plyr1705\interfaces\backend\actions\hello
 */
class IndexAction extends Action
{
    public function run( $message = 'hello, world!' )
    {
        return $message;
    }
}
