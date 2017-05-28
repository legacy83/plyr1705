<?php

namespace plyr1705\interfaces\frontend\widgets;

use yii\base\Widget;

/**
 * Class HomePortfolio
 *
 * @package plyr1705\interfaces\frontend\widgets
 */
class HomePortfolio extends Widget
{
    public function run()
    {
        return $this->render( 'home-portfolio' );
    }
}
