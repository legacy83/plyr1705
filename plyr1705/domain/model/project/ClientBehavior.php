<?php

namespace plyr1705\domain\model\project;

use yii\base\Behavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class ClientBehavior
 *
 * @package plyr1705\domain\model\project
 */
class ClientBehavior extends Behavior
{
    public function getClient()
    {
        /* @var $owner ActiveRecord */
        /* @var $query ActiveQuery */

        $owner = $this->owner;
        $query = $owner->hasOne( ProjectMetaRecord::className(), [ 'project_id' => 'id' ] );
        $query->where( '`key` = :key', [ ':key' => 'project-client' ] );

        return $query;
    }
}
