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
    /**
     * @param Project $project
     *
     * @return $this
     */
    public function next( Project $project )
    {
        $this->andWhere( [ 'id' => $project->id + 1 ] );
        $this->limit( 1 );
        return $this;
    }

    /**
     * @param Project $project
     *
     * @return $this
     */
    public function previous( Project $project )
    {
        $this->andWhere( [ 'id' => $project->id - 1 ] );
        $this->limit( 1 );
        return $this;
    }
}
