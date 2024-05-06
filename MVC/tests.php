<?php

define("BASE_URL", '../MVC');

//inclusion des classes

require_once 'models/router.php';
require_once 'models/user.php';
require_once 'controllers/homeController.php';
require_once 'controllers/profileController.php';
require_once 'controllers/logoutController.php';

// instanciation du routeur

$router = new Router();

// Définition des routes

$router->addRoute('GET', BASE_URL.'/homeController.php', 'HomeController', 'index');
$router->addRoute('POST', BASE_URL.'/profileController.php', 'ProfileController', 'index');
$router->addRoute('GET', BASE_URL.'/logoutController.php', 'LogoutController', 'index');



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
