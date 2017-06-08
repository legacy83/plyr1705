<?php

namespace plyr1705\interfaces\frontend\actions\site;

use plyr1705\domain\model\project\ProjectRecord;
use yii\base\Action;

/**
 * Class SingleProjectAction
 *
 * @package plyr1705\interfaces\frontend\actions\site
 */
class SingleProjectAction extends Action
{
    public function run()
    {
        $projectId = intval( \Yii::$app->request->get( 'id' ) );
        $project = ProjectRecord::findOne( $projectId );

        return $this->controller->render( 'project', [
            'project' => $project,
        ] );
    }
}
