<?php
define("ROOT", "http://88.198.104.148");

define("SITE", "MyApp");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_crud",
    "username" => "user1",
    "passwd" => "password1",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
//Datalayer
/*const DATA_LAYER_CONFIG = [
"driver" => "mysql",
"host" => "localhost",
"port" => "3306",
"dbname" => "db_crud",
"username" => "user1",
"passwd" => "password1",
"options" => [
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
PDO::ATTR_CASE => PDO::CASE_NATURAL
]
];*/

function url(string $uri = null): string
{
    if($uri){
        return ROOT . "/{$uri}";
    }
    return ROOT;
}
