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
        $this->createTable( 'project', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'client_name' => $this->string()->notNull(),
            'thumbnail_src' => $this->string()->notNull(),
            'thumbnail_alt' => $this->string(),
            'featured_src' => $this->string()->notNull(),
            'featured_alt' => $this->string(),
            'work1_src' => $this->string()->notNull(),
            'work1_alt' => $this->string(),
            'work2_src' => $this->string()->notNull(),
            'work2_alt' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ] );
    }

    public function down()
    {
        $this->dropTable( 'project' );
    }
}
