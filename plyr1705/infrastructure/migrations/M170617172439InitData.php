<?php

namespace plyr1705\infrastructure\migrations;

use yii\db\Migration;

/**
 * Class M170617172439InitData
 *
 * @package plyr1705\infrastructure\migrations
 */
class M170617172439InitData extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        for ( $i = 0; $i < 15; $i++ ) {

            // create project dependencies
            $clientId = $this->createProjectClient();
            $thumbnailId = $this->createProjectThumbnail();
            $featuredId = $this->createProjectFeatured();

            // create project with some work images
            $projectId = $this->createProject( $clientId, $thumbnailId, $featuredId );
            $this->createProjectWorkImages( $projectId );

        }
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete( 'project_media_image', [ 'key' => 'work-images' ] );
        $this->delete( 'project' );
        $this->delete( 'project_media_image', [ 'key' => 'featured' ] );
        $this->delete( 'project_media_image', [ 'key' => 'thumbnail' ] );
        $this->delete( 'project_client' );
    }

    /**
     * Create a project.
     *
     * @param $clientId
     * @param $thumbnailId
     * @param $featuredId
     *
     * @return string
     */
    private function createProject( $clientId, $thumbnailId, $featuredId )
    {
        $this->insert( 'project', [
            'title' => 'Project Name',
            'content' => 'Army had half a day. There\'s only one man I\'ve ever called a coward, and that\'s Brian Doyle Murray. No, what I\'m calling you is a television actor. There\'s so many poorly chosen words in that sentence.',
            'created_at' => time(),
            'updated_at' => time(),
            'client_id' => $clientId,
            'thumbnail_id' => $thumbnailId,
            'featured_id' => $featuredId,
        ] );

        return $this->db->getLastInsertID();
    }

    /**
     * Create a project client.
     *
     * @return integer
     */
    private function createProjectClient()
    {
        $this->insert( 'project_client', [
            'name' => 'Google',
        ] );

        return $this->db->getLastInsertID();
    }

    /**
     * Create a project thumbnail image.
     *
     * @return integer
     */
    private function createProjectThumbnail()
    {
        $this->insert( 'project_media_image', [
            'key' => 'thumbnail',
            'url' => 'http://static.npress.com.br/plyr/assets/images/portfolio2-thumb1.jpg',
            'alt' => '',
        ] );

        return $this->db->getLastInsertID();
    }

    /**
     * Create a project featured image.
     *
     * @return integer
     */
    private function createProjectFeatured()
    {
        $this->insert( 'project_media_image', [
            'key' => 'featured',
            'url' => 'http://static.npress.com.br/plyr/assets/images/single-work1.jpg',
            'alt' => '',
        ] );

        return $this->db->getLastInsertID();
    }

    /**
     * Create some project work images.
     *
     * @return integer
     */
    private function createProjectWorkImages( $projectId )
    {
        $this->insert( 'project_media_image', [
            'key' => 'work-images',
            'url' => 'http://static.npress.com.br/plyr/assets/images/single-work2.jpg',
            'alt' => '',
            'project_id' => $projectId,
        ] );

        $this->insert( 'project_media_image', [
            'key' => 'work-images',
            'url' => 'http://static.npress.com.br/plyr/assets/images/single-work3.jpg',
            'alt' => '',
            'project_id' => $projectId,
        ] );
    }
}
