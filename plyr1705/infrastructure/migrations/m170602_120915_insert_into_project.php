<?php

use yii\db\Migration;

/**
 * Class m170602_120915_insert_into_project
 */
class m170602_120915_insert_into_project extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        foreach ( range( 1, 9 ) as $index ) {
            $this->insert( 'project', [
                'name' => "project-{$index}",
                'title' => 'Project Name',
                'content' => 'Army had half a day. There\'s only one man I\'ve ever called a coward, and that\'s Brian Doyle Murray. No, what I\'m calling you is a television actor. There\'s so many poorly chosen words in that sentence.',
                'client_name' => 'Google',
                'thumbnail_src' => 'http://static.npress.com.br/plyr/assets/images/portfolio2-thumb1.jpg',
                'thumbnail_alt' => 'thumbnail alternate text',
                'featured_src' => 'http://static.npress.com.br/plyr/assets/images/single-work1.jpg',
                'featured_alt' => 'featured alternate text',
                'work1_src' => 'http://static.npress.com.br/plyr/assets/images/single-work2.jpg',
                'work1_alt' => 'work1 alternate text',
                'work2_src' => 'http://static.npress.com.br/plyr/assets/images/single-work3.jpg',
                'work2_alt' => 'work2 alternate text',
                'created_at' => \time(),
                'updated_at' => \time(),
            ] );
        }
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->delete( 'project' );
    }
}
