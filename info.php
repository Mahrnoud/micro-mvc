<?php

function database($var) :string{

    $connection =  [
        'hostname' => 'localhost',
        'database' => 'micro',
        'username' => 'root',
        'password' => ''
    ];

    return $connection[$var];
}
