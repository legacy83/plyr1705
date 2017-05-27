<?php

namespace plyr1705\interfaces\actions;

use yii\base\Action;

/**
 * Class SiteSingleProject
 *
 * @package plyr1705\interfaces\actions
 */
class SiteSingleProject extends Action
{
    public function run()
    {
        return $this->controller->render( 'project' );
    }
}