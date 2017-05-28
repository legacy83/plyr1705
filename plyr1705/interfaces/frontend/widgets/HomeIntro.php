<?php

namespace plyr1705\interfaces\frontend\widgets;

use yii\base\Widget;

/**
 * Class HomeIntro
 *
 * @package plyr1705\interfaces\frontend\widgets
 */
class HomeIntro extends Widget
{
    public function run()
    {
        return $this->render( 'home-intro' );
    }
}
