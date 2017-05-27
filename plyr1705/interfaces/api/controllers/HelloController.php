<?php

namespace plyr1705\interfaces\api\controllers;

use plyr1705\interfaces\api\actions\hello\IndexAction;
use yii\rest\Controller;

/**
 * Class HelloController
 *
 * @package plyr1705\interfaces\api\controllers
 */
class HelloController extends Controller
{
    public function actions()
    {
        return [
            'index' => [ 'class' => IndexAction::className(), ],
        ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset( $behaviors[ 'rateLimiter' ] );

        return $behaviors;
    }
}
