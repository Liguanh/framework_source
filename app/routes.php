<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 2:32 PM
 */

$router = new \Klein\Klein();


$router->get('/home', 'App\Controller\IndexController::index');
$router->get('/register', 'App\Controller\IndexController::index');

$router->get('/404', function(){

});

if(!in_array($_SERVER['REQUEST_URI'], $router->paths())) {
    throw new OutOfBoundsException('No such route with name: '. $_SERVER['REQUEST_URI']);
}

$router->dispatch();


