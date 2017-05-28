<?php

namespace app\modules\api;

/**
 * Class Module
 *
 * @package app\modules\api
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'plyr1705\interfaces\api\controllers';
    public $defaultRoute = 'hello/index';

    public function init()
    {
        parent::init();
    }
}
