<?php
require_once __DIR__ . '../../vendor/autoload.php';

use CoffeeCode\Router\Router;

/**
 * instancia do router com a url padão
 */
$router = new Router(URL_BASE);


$router->namespace("App\controllers");
$router->group(null);
$router->get("/", "ViaCepController:home");
//$router->post("/save", "ViaCepController:save");

/************
 * ERROS
 ************/
$router->group("ooops");
$router->get("/{errcode}", "ViaCepController:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}
