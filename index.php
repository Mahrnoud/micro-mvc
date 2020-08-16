<?php

require __DIR__ . '/vendor/autoload.php';

use Models\User;

$x = new User();
$user = $x->select(['username'])
            ->where('password', '=', 'password')
            ->orderBy('id', 'DESC')
            ->get();

foreach ($user as $use){

    echo $use[0].'<br>';
}