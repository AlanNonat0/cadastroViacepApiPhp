<?php
require_once __DIR__ . '../../vendor/autoload.php';

use CoffeeCode\Router\Router;

/**
 * router instance with base url
 */
$router = new Router(URL_BASE);


$router->namespace("App\controllers");
$router->group(null);
$router->get("/{endereco}", "ViaCepController:home");
$router->get("/", "ViaCepController:home");
$router->post("/", "ViaCepController:home");
$router->post("/save", "ViaCepController:save");

/************
 * ERRORS
 ************/
$router->group("ooops");
$router->get("/{errcode}", "ViaCepController:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}
