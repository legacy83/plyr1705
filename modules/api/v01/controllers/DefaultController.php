<?php

namespace app\modules\api\v01\controllers;

use yii\web\Controller;

/**
 * Default controller for the `api-v01` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
