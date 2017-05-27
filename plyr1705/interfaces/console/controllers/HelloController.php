<?php

namespace plyr1705\interfaces\console\controllers;

use plyr1705\interfaces\console\actions\hello\IndexAction;
use yii\console\Controller;

/**
 * Class HelloController
 *
 * @package plyr1705\interfaces\console\controllers
 */
class HelloController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [ 'class' => IndexAction::className(), ],
        ];
    }
}