<?php

namespace plyr1705\interfaces\frontend\widgets;

use plyr1705\domain\model\Project;
use yii\base\Widget;

/**
 * Class SingleProjectNav
 *
 * @package plyr1705\interfaces\frontend\widgets
 */
class SingleProjectNav extends Widget
{
    /**
     * @var Project
     */
    public $current;

    public function run()
    {
        return $this->render( 'single-project-nav', [
            'previous' => Project::find()->previous( $this->current )->one(),
            'next' => Project::find()->next( $this->current )->one(),
        ] );
    }
}
