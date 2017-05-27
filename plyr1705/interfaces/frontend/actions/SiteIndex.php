<?php

namespace plyr1705\interfaces\frontend\actions;

use yii\base\Action;

/**
 * Class SiteIndex
 *
 * @package plyr1705\interfaces\frontend\actions
 */
class SiteIndex extends Action
{
    public function run()
    {
        $this->controller->layout = 'main-home';
        return $this->controller->render( 'index' );
    }
}