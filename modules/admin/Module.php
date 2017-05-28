<?php

namespace app\modules\admin;

/**
 * Class Module
 *
 * @package app\modules\admin
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'plyr1705\interfaces\backend\controllers';
    public $defaultRoute = 'hello/index';

    public function init()
    {
        parent::init();
    }
}
