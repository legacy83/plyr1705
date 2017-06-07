<?php

$data = [];
foreach ( range( 1, 15 ) as $index ) {
    array_push( $data, [
        'id' => $index,
        'name' => 'Google',
    ] );
}

return $data;
