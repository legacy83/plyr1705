<?php

namespace plyr1705\interfaces\frontend\actions;

use yii\base\Action;

/**
 * Class SiteSingleProject
 *
 * @package plyr1705\interfaces\frontend\actions
 */
class SiteSingleProject extends Action
{
    public function run()
    {
        return $this->controller->render( 'project' );
    }
}