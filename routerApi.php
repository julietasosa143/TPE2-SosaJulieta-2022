<?php
require_once 'libs/Router.php';
require_once './controllers/ApiController.php';

$router = new Router();

// define la tabla de ruteo
$router->addRoute('reviews', 'GET', 'ApiController', 'getAll');
$router->addRoute('reviews', 'POST', 'ApiController', 'createReview');
$router->addRoute('reviews/:ID', 'GET', 'ApiController', 'getReview');
$router->addRoute('reviews/:ID','DELETE','ApiController','deleteReview');
// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
