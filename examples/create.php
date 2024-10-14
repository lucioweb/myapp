<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user =new User();
$user->first_name = "Mario";
$user->last_name = "Marius";
$user->genre = "M";

$user->save();

var_dump($user);

