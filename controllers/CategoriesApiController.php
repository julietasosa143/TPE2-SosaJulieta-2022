<?php

require_once "./model/CategoriesModel.php";
require_once "./view/CategoriesAPIView.php";
require_once "./model/ItemsModel.php";

class CategoriesAPIController
{

    private $model;
    private $view;
    private $modelItems;

    function __construct()
    {
        $this->model= new CategoriesModel();
        $this->view = new CategoriesView();
        $this->modelItems = new ItemsModel();
    }

    function showCategories()
    {
        $categories= $this->model->getCategoriesFromDB();
        $this->view->renderCategories($categories);
    }
    function showItemsInCat($id)
    {
        $items = $this->modelItems->getItemsByCategory($id);
        $category = $this->model->getCategoryForItem($id);
        $this->view->renderItemsByCategory($items, $category);
    }
    function addCategory()
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $this->model->insertCategoryOnDB($nombre, $descripcion);
        $this->view->redirectList();
    }
    function editCategory($id)
    {
        $id = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $this->model->editCategoryDB($id, $nombre, $descripcion);
        $this->view->redirectList();
    }
    function deleteCategory($id)
    {
        $this->model->deleteCategoryFromDB($id);
        $this->view->redirectList();
    }
}