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
 * @property integer          $client_id
 * @property integer          $thumbnail_id
 * @property integer          $featured_id
 *
 * @property ClientRecord     $client
 * @property MediaImageRecord $thumbnail
 * @property MediaImageRecord $featured
 * @property array            $workImages
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

    /**
     * Get the client.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne( ClientRecord::className(), [ 'id' => 'client_id' ] );
    }

    /**
     * Get the thumbnail image.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getThumbnail()
    {
        $query = $this->hasOne( MediaImageRecord::className(), [ 'id' => 'thumbnail_id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'thumbnail' ] );
    }

    /**
     * Get the featured image.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeatured()
    {
        $query = $this->hasOne( MediaImageRecord::className(), [ 'id' => 'featured_id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'featured' ] );
    }

    /**
     * Get all the related work images.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkImages()
    {
        $query = $this->hasMany( MediaImageRecord::className(), [ 'project_id' => 'id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'work-images' ] );
    }
}
