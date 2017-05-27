<?php

namespace plyr1705\interfaces\frontend\actions\site;

use yii\base\Action;

/**
 * Class IndexAction
 *
 * @package plyr1705\interfaces\frontend\actions\site
 */
class IndexAction extends Action
{
    public function run()
    {
        $this->controller->layout = 'main-home';
        return $this->controller->render( 'index' );
    }
}