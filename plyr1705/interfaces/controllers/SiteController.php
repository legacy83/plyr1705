<?php

namespace plyr1705\interfaces\controllers;

use plyr1705\interfaces\actions\SiteIndex;
use plyr1705\interfaces\actions\SiteSingleProject;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Class SiteController
 *
 * @package plyr1705\interfaces\controllers
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