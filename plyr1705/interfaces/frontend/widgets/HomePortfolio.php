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
        $portfolio = [];
        foreach ( range( 1, 9 ) as $identity ) {
            $project = new \stdClass();
            $project->id = $identity;

            array_push( $portfolio, $project );
        }

        return $this->render( 'home-portfolio', [
            'portfolio' => $portfolio,
        ] );
    }
}
