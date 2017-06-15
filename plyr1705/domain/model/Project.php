<?php

namespace plyr1705\domain\model;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class Project
 *
 * @property integer             $id
 * @property string              $title
 * @property string              $content
 * @property integer             $created_at
 * @property integer             $updated_at
 * @property integer             $client_id
 * @property integer             $thumbnail_id
 * @property integer             $featured_id
 *
 * @property ProjectClient       $client
 * @property ProjectMediaImage   $thumbnail
 * @property ProjectMediaImage   $featured
 * @property ProjectMediaImage[] $workImages
 *
 * @package plyr1705\domain\model
 */
class Project extends ActiveRecord
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
     * @inheritdoc
     *
     * @return ProjectQuery
     */
    public static function find()
    {
        return new ProjectQuery( static::className() );
    }

    /**
     * Get the client.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne( ProjectClient::className(), [ 'id' => 'client_id' ] );
    }

    /**
     * Get the thumbnail image.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getThumbnail()
    {
        $query = $this->hasOne( ProjectMediaImage::className(), [ 'id' => 'thumbnail_id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'thumbnail' ] );
    }

    /**
     * Get the featured image.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeatured()
    {
        $query = $this->hasOne( ProjectMediaImage::className(), [ 'id' => 'featured_id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'featured' ] );
    }

    /**
     * Get all the related work images.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkImages()
    {
        $query = $this->hasMany( ProjectMediaImage::className(), [ 'project_id' => 'id' ] );
        return $query->where( '`key` = :key', [ ':key' => 'work-images' ] );
    }
}
