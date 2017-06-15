<?php

namespace plyr1705\domain\model;

use yii\db\ActiveRecord;

/**
 * Class ProjectClient
 *
 * @property integer $id
 * @property string  $name
 *
 * @package plyr1705\domain\model
 */
class ProjectClient extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_client';
    }
}
