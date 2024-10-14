<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user =(new User())->findById(9);
$user->first_name = "João";
$user->last_name = "Maria";
$user->save();

var_dump($user);
