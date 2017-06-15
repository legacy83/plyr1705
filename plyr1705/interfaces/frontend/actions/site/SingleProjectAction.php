<?php

namespace plyr1705\interfaces\frontend\actions\site;

use plyr1705\domain\model\Project;
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
        $project = Project::findOne( $projectId );

        return $this->controller->render( 'project', [
            'project' => $project,
        ] );
    }
}
