<?php

namespace plyr1705\interfaces\frontend\widgets;

use plyr1705\domain\model\project\ProjectRecord;
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
        $query = ProjectRecord::find();
        $query->orderBy( 'created_at desc' );
        $query->limit( 12 );

        return $this->render( 'home-portfolio', [
            'portfolio' => $query->all(),
        ] );
    }
}
