<?php

namespace plyr1705\interfaces\api\actions\hello;

use yii\base\Action;

/**
 * Class IndexAction
 *
 * @package plyr1705\interfaces\api\actions\hello
 */
class IndexAction extends Action
{
    public function run( $message = 'hello, world!' )
    {
        return $message;
    }
}
