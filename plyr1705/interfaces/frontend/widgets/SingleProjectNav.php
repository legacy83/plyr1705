<?php

namespace plyr1705\interfaces\frontend\widgets;

use plyr1705\domain\model\project\ProjectRecord;
use yii\base\Widget;

/**
 * Class SingleProjectNav
 *
 * @package plyr1705\interfaces\frontend\widgets
 */
class SingleProjectNav extends Widget
{
    /**
     * @var ProjectRecord
     */
    public $current;

    public function run()
    {
        return $this->render( 'single-project-nav', [
            'previous' => ProjectRecord::find()->previous( $this->current )->one(),
            'next' => ProjectRecord::find()->next( $this->current )->one(),
        ] );
    }
}
