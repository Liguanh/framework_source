<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 2:32 PM
 */

$router = new \Klein\Klein();


$router->get('/home', 'App\Controller\IndexController::index');

$router->get('/404', 'App\Controller\ErrorController::error');
if(!in_array($_SERVER['REQUEST_URI'], $router->paths())) {
    return header('Location:/404');
}

$router->dispatch();


