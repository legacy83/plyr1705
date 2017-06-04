<?php

namespace plyr1705\domain\model\project;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class ProjectRecord
 *
 * @property integer          $id
 * @property string           $title
 * @property string           $content
 * @property integer          $created_at
 * @property integer          $updated_at
 * @property ClientRecord     $client
 * @property MediaImageRecord $thumbnail
 * @property MediaImageRecord $featured
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

    public function getClient()
    {
        return $this->hasOne( ClientRecord::className(), [ 'id' => 'client_id' ] );
    }

    public function getThumbnail()
    {
        $query = $this->hasOne( MediaImageRecord::className(), [ 'id' => 'thumbnail_id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'thumbnail' ] );
    }

    public function getFeatured()
    {
        $query = $this->hasOne( MediaImageRecord::className(), [ 'id' => 'featured_id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'featured' ] );
    }
}
