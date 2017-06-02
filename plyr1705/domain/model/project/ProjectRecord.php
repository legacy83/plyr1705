<?php

namespace plyr1705\domain\model\project;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class ProjectRecord
 *
 * @property integer $id
 * @property string  $name
 * @property string  $title
 * @property string  $content
 * @property string  $client_name
 * @property string  $thumbnail_src
 * @property string  $thumbnail_alt
 * @property string  $featured_src
 * @property string  $featured_alt
 * @property string  $work1_src
 * @property string  $work1_alt
 * @property string  $work2_src
 * @property string  $work2_alt
 * @property integer $created_at
 * @property integer $updated_at
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
