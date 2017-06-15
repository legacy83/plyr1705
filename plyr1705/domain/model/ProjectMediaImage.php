<?php

namespace plyr1705\domain\model;

use yii\db\ActiveRecord;

/**
 * Class ProjectMediaImage
 *
 * @property integer $id
 * @property string  $key
 * @property string  $url
 * @property string  $alt
 * @property string  $project_id
 *
 * @package plyr1705\domain\model
 */
class ProjectMediaImage extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_media_image';
    }
}
