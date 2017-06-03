<?php

namespace plyr1705\domain\model\project;

use yii\db\ActiveRecord;

/**
 * Class ClientRecord
 *
 * @property integer $id
 * @property string  $name
 *
 * @package plyr1705\domain\model\project
 */
class ClientRecord extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_client';
    }
}
