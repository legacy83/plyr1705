<?php

namespace plyr1705\interfaces\frontend\widgets;

use plyr1705\domain\model\Project;
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
        $query = Project::find();
        $query->limit( 12 );

        return $this->render( 'home-portfolio', [
            'portfolio' => $query->all(),
        ] );
    }
}
