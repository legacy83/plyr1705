<?php

$data = [];

foreach ( range( 1, 15 ) as $index ) {
    array_push( $data, [
        'id' => $index,
        'key' => 'thumbnail',
        'url' => 'http://static.npress.com.br/plyr/assets/images/portfolio2-thumb1.jpg',
        'alt' => '',
        'project_id' => null,
    ] );
}

foreach ( range( 1, 15 ) as $index ) {
    array_push( $data, [
        'id' => 15 + $index,
        'key' => 'featured',
        'url' => 'http://static.npress.com.br/plyr/assets/images/single-work1.jpg',
        'alt' => '',
        'project_id' => null,
    ] );
}

foreach ( range( 1, 15 ) as $index ) {
    array_push( $data, [
        'id' => 30 + $index,
        'key' => 'work-images',
        'url' => 'http://static.npress.com.br/plyr/assets/images/single-work2.jpg',
        'alt' => '',
        'project_id' => $index,
    ] );
}

foreach ( range( 1, 15 ) as $index ) {
    array_push( $data, [
        'id' => 45 + $index,
        'key' => 'work-images',
        'url' => 'http://static.npress.com.br/plyr/assets/images/single-work3.jpg',
        'alt' => '',
        'project_id' => $index,
    ] );
}

return $data;
