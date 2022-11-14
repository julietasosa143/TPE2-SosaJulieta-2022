<?php

require_once "./model/CategoriesModel.php";
require_once "./view/CategoriesView.php";
require_once "./model/ItemsModel.php";
require_once './helpers/authHelper.php';

class CategoriesController
{

    private $model;
    private $view;
    private $modelItems;
    private $authHelper;

    function __construct()
    {
        $this->model= new CategoriesModel();
        $this->view = new CategoriesView();
        $this->modelItems = new ItemsModel();
        $this->authHelper = new AuthHelper();
    }

    function showCategories()
    {
        $logged = $this->authHelper->checkLoggedIn();
        $categories= $this->model->getCategoriesFromDB();
        $this->view->renderCategories($logged,$categories);
    }
    function showItemsInCat($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        $items = $this->modelItems->getItemsByCategory($id);
        $category = $this->model->getCategoryForItem($id);
        $this->view->renderItemsByCategory($logged,$items, $category);
    }
    function addCategory()
    {
        $this->authHelper-> restrictLoggedIn();
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $this->model->insertCategoryOnDB($nombre, $descripcion);
        $this->view->redirectCategoriesList();
    }
    function editCategory($id)
    {
        $this->authHelper-> restrictLoggedIn();
        $id = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $this->model->editCategoryDB($id, $nombre, $descripcion);
        $this->view->redirectCategoriesList();
    }
    function deleteCategory($id)
    {
        $this->authHelper-> restrictLoggedIn();
        $this->model->deleteCategoryFromDB($id);
        $this->view->redirectCategoriesList();
    }
}