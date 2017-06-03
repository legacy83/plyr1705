<?php

namespace plyr1705\domain\model\project;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class ProjectRecord
 *
 * @property integer $id
 * @property string  $title
 * @property string  $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $client_id
 * @property integer $thumbnail_id
 * @property integer $featured_id
 *
 * @package plyr1705\domain\model\project
 */
class ProjectRecord extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
}
