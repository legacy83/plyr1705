<?php

namespace plyr1705\domain\model\project;

use yii\db\ActiveRecord;

/**
 * Class Project
 *
 * @property integer $id
 * @property integer $project_id
 * @property string  $key
 * @property string  $value
 *
 * @package plyr1705\domain\model\project
 */
class ProjectMeta extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%project_meta}}';
    }
}
