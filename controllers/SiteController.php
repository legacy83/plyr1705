<?php

namespace app\controllers;

use plyr1705\interfaces\actions\SiteIndex;
use plyr1705\interfaces\actions\SiteSingleProject;
use yii\web\Controller;

/**
 * Class SiteController
 *
 * @package app\controllers
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
        ];
    }
}