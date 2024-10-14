<?php

require __DIR__ . "/../vendor/autoload.php";

//use CoffeeCode\DataLayer\Connect;
//
//$conn=Connect::getInstance();
//$error=Connect::getError();
//
//if($error){
//    echo $error->getMessage();
//    die();
//}
//
//var_dump(true);
//$query=$conn->query("SELECT*FROM tbl_users");
//
//var_dump($query->fetchAll());

use Source\Models\User;

$user = new User();
$users = $user->find()->fetch(true);
//var_dump($user); //Vê  o objeto montado
//var_dump($users); //Temos os nossos usuários

/** @var  $userItem User */
foreach ($users as $userItem) {
    //var_dump($userItem->first_name);
    //var_dump($userItem);
    var_dump($userItem->data());
    //var_dump($userItem->addresses());

    foreach ($userItem->addresses() as $address) {
        var_dump($address->data());
    }
}
