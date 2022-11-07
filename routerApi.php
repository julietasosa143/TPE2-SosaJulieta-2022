<?php
require_once 'libs/Router.php';

$router = new Router();

// define la tabla de ruteo
$router->addRoute('items', 'GET', 'ItemsApiController', 'obtenerItems');
$router->addRoute('items', 'POST', 'ItemsApiController', 'crearItems');
$router->addRoute('items/:ID', 'GET', 'ItemsApiController', 'obtenerItem');
$router->addRoute('categorias', 'GET', 'CategoriesApiController','obtenerCategorias');
$router->addRoute('categorias','POST','CategoriesApiController','crearCategoria');
$router->addRoute('categorias/:ID','GET','CategoriesApiController','obetenerItemsByCat');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
