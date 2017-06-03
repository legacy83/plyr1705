<?php

use yii\db\Migration;

/**
 * Class m170603_005124_init
 */
class m170603_005124_init extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable( 'project', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
            'thumbnail_id' => $this->integer()->notNull(),
            'featured_id' => $this->integer()->notNull(),
        ] );

        $this->createTable( 'project_client', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ] );

        $this->createTable( 'project_media_image', [
            'id' => $this->primaryKey(),
            'key' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'alt' => $this->string()->notNull(),
            'project_id' => $this->integer()->notNull(),
        ] );

        $this->createIndex( 'idx--project_media_image--key', 'project_media_image', 'key' );
        $this->createIndex( 'idx--project_media_image--project_id', 'project_media_image', 'project_id' );

        $this->addForeignKey( 'fk--project--client_id', 'project', 'client_id', 'project_client', 'id' );
        $this->addForeignKey( 'fk--project--thumbnail_id', 'project', 'thumbnail_id', 'project_media_image', 'id' );
        $this->addForeignKey( 'fk--project--featured_id', 'project', 'featured_id', 'project_media_image', 'id' );
        $this->addForeignKey( 'fk--project_media_image--project_id', 'project_media_image', 'project_id', 'project', 'id' );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable( 'project' );
        $this->dropTable( 'project_client' );
        $this->dropTable( 'project_media_image' );
    }
}
