<?php

define("BASE_URL", './home/eliess/studiwork/MVC');

//inclusion des classes

require_once './home/eliess/studiwork/MVC/models/router.php';
require_once './home/eliess/studiwork/MVC/models/user.php';
require_once './home/eliess/studiwork/MVC/controllers/homeController.php';
require_once './home/eliess/studiwork/MVC/controllers/profileController.php';
require_once './home/eliess/studiwork/MVC/controllers/logoutController.php';

// instanciation du routeur

$router = new Router();

// Définition des routes

$router->addRoute('GET', BASE_URL.'/', 'HomeController', 'index');
$router->addRoute('POST', BASE_URL.'/profile', 'ProfileController', 'index');
$router->addRoute('GET', BASE_URL.'/logout', 'LogoutController', 'index');



$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$handler = $router->gethandler($method, $uri);

if ($handler == null ) {
    header ('HTTP/1.1 404 not found');
    exit();
}

// Appel du controlleur

$controller = new $handler['controller']();
$action = $handler['action'];
$controller->$action();
