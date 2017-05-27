<?php

namespace plyr1705\interfaces\frontend\actions\site;

use yii\base\Action;

/**
 * Class SiteSingleProject
 *
 * @package plyr1705\interfaces\frontend\actions\site
 */
class SingleProjectAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'project' );
    }
}