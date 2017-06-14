<?php

namespace plyr1705\domain\model\project;

use yii\db\ActiveQuery;

/**
 * Class ProjectQuery
 *
 * @package plyr1705\domain\model\project
 */
class ProjectQuery extends ActiveQuery
{
    public function next( ProjectRecord $project )
    {
        $this->andWhere( [ 'id' => $project->id + 1 ] );
        $this->limit( 1 );
        return $this;
    }

    public function previous( ProjectRecord $project )
    {
        $this->andWhere( [ 'id' => $project->id - 1 ] );
        $this->limit( 1 );
        return $this;
    }
}
