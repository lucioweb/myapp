<?php

require_once __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new \CoffeeCode\Router\Router("ROOT");
/*
 * Controles
 */
$router->namespace("Source\App");

/*
 * WEB
 * home
 */
$router->group(null);
$router->get("/", "Web:home");
$router->get("/contato", "Web:contact");
$router->get("/blog", "Web:blog");
$router->get("/about", "Web:about");

/*
 * WEB
 * blog
 */
//$router->group("blog");
//$router->get("/", "Web:blog");
//$router->get("/{post_uri}", "Web:post");
//$router->get("/categoria/{cat_uri}", "Web:category");

/*
 * WEB
 * contato
 */
//$router->group("contato");
//$router->get("/", "Web:contact");
//$router->get("/{sector}", "Web:contact");// Regras dinâmicas devem vir antes das regras estáticas
//$router->get("/suporte", "Web:suport"); // Não implementado

/*
 * ERRORS
 *
 */
$router->group("ops")->namespace("Source\App");
$router->get("/{errcode}", "Web:error");



$router->dispatch();


if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}

//if ($router->error()) {
//    echo "<h1>Erro {$router->error()}</h1>";
//}