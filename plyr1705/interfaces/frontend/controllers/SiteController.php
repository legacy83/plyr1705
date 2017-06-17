<?php

namespace plyr1705\interfaces\frontend\controllers;

use plyr1705\domain\model\Project;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\NotFoundHttpException;

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
            'error' => [ 'class' => ErrorAction::className(), ],
        ];
    }

    public function actionIndex()
    {
        return $this->render( 'index' );
    }

    public function actionProject()
    {
        $projectId = intval( \Yii::$app->request->get( 'id' ) );
        $project = Project::findOne( $projectId );

        if ( !$project ) {
            throw new NotFoundHttpException();
        }

        return $this->render( 'project', [
            'project' => $project,
        ] );
    }
}
