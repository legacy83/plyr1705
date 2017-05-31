<?php

use yii\db\Migration;

/**
 * Class m170531_020538_init
 *
 */
class m170531_020538_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable( 'project', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions );

        $this->createTable( 'project_meta', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'key' => $this->string()->notNull(),
            'value' => $this->string(),
        ], $tableOptions );

        $this->createIndex( 'idx-project_meta-project_id', 'project_meta', 'project_id' );
        $this->addForeignKey( 'fk-project_meta-project_id', 'project_meta', 'project_id', 'project', 'id' );
    }

    public function down()
    {
        $this->dropForeignKey( 'fk-project_meta-project_id', 'project_meta' );
        $this->dropIndex( 'idx-project_meta-project_id', 'project_meta' );
        $this->dropTable( 'project_meta' );
        $this->dropTable( 'project' );
    }
}
