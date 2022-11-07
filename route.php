<?php

require_once "controllers/GeneralController.php";
require_once 'controllers/ItemsController.php';
require_once 'controllers/CategoriesController.php';
require_once 'controllers/LoginController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

$params = explode('/', $action);
$GeneralController = new GeneralController();
$CategoriesController= new CategoriesController();
$ItemsController= new ItemsController();
$LoginController= new LoginController();

    

switch ($params[0]) {
    case 'index':
        $GeneralController->showHome();
        break;
    case 'productos':
        $ItemsController->showItems();
        break;
    case 'categorias':
        $CategoriesController->showCategories();
        break;
    case 'item':
        $ItemsController->showItem($params[1]);
        break;
    case 'showItemsInCat':
        $CategoriesController->showItemsInCat($params[1]);
        break;
    case 'login':
        $LoginController->login();
        break;
    case 'logout':
        $LoginController->logout();
        break;
    case 'validate':
        $LoginController->validateUser();
        break;
    case 'addCategory':
        $CategoriesController -> addCategory();
        break;
    case 'editCategory':
        $CategoriesController -> editCategory($params[1]);
        break;
    case 'deleteCategory':
        $CategoriesController -> deleteCategory($params[1]);
        break;
    case 'addItem':
        $ItemsController -> addItem();
        break;
    case 'editItem':
        $ItemsController -> editItem();
        break;
    case 'deleteItem':
        $ItemsController -> deleteItem($params[1]);
        break;
    
}
