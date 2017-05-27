<?php

namespace plyr1705\interfaces\backend\controllers;

use plyr1705\interfaces\backend\actions\hello\IndexAction;
use yii\web\Controller;

/**
 * Class HelloController
 *
 * @package plyr1705\interfaces\backend\controllers
 */
class HelloController extends Controller
{
    public function actions()
    {
        return [
            'index' => [ 'class' => IndexAction::className(), ],
        ];
    }
}