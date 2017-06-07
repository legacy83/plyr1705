<?php

$data = [];
foreach ( range( 1, 15 ) as $index ) {
    array_push( $data, [
        'id' => $index,
        'title' => 'Project Name',
        'content' => 'Army had half a day. There\'s only one man I\'ve ever called a coward, and that\'s Brian Doyle Murray. No, what I\'m calling you is a television actor. There\'s so many poorly chosen words in that sentence.',
        'created_at' => time(),
        'updated_at' => time(),
        'client_id' => $index,
        'thumbnail_id' => $index,
        'featured_id' => 15 + $index,
    ] );
}

return $data;
