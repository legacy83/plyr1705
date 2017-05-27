<?php

namespace plyr1705\interfaces\frontend\controllers;

use plyr1705\interfaces\frontend\actions\site\IndexAction;
use plyr1705\interfaces\frontend\actions\site\SingleProjectAction;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Class SiteController
 *
 * @package plyr1705\interfaces\frontend\controllers
 */
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'index' => [ 'class' => IndexAction::className(), ],
            'project' => [ 'class' => SingleProjectAction::className(), ],
            'error' => [ 'class' => ErrorAction::className(), ],
        ];
    }
}
