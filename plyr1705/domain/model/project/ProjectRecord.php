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
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
}
