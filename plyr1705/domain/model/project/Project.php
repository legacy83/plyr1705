<?php

namespace plyr1705\domain\model\project;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class Project
 *
 * @property integer $id
 * @property string  $name
 * @property string  $title
 * @property string  $content
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @package plyr1705\domain\model\project
 */
class Project extends ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public static function tableName()
    {
        return '{{%project}}';
    }

    public function getClient()
    {
        return $this->hasOne( ProjectMeta::className(), [ 'project_id' => 'id' ] );
    }
}
