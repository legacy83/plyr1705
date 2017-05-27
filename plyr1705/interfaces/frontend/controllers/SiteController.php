<?php

namespace plyr1705\interfaces\frontend\controllers;

use plyr1705\interfaces\frontend\actions\SiteIndex;
use plyr1705\interfaces\frontend\actions\SiteSingleProject;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Class SiteController
 *
 * @package plyr1705\interfaces\frontend\controllers
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [ 'class' => SiteIndex::className(), ],
            'project' => [ 'class' => SiteSingleProject::className(), ],
            'error' => [ 'class' => ErrorAction::className(), ],
        ];
    }
}