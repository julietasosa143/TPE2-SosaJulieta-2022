<?php

require_once "./model/ItemsModel.php";
require_once "./view/ItemsView.php";
require_once "./model/CategoriesModel.php";
require_once './helpers/authHelper.php';
require_once './model/ReviewsModel.php';

class ItemsController
{

    private $model;
    private $view;
    private $modelC;
    private $authHelper;
    private $modelR;
    
    function __construct()
    {
        $this->model = new ItemsModel();
        $this->view = new ItemsView();
        $this -> modelC= new CategoriesModel();
        $this-> authHelper = new AuthHelper();
        $this->modelR=new ReviewsModel();
    }

    function showItems()
    {
        
        $logged = $this->authHelper->checkLoggedIn();
        $items= $this->model->getItemsFromDB();
        $categories = $this-> modelC->getCategoriesFromDB();
        $this->view->renderItems($logged, $items, $categories);
        
    }
    function showItem($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        $item = $this->model->getItem($id);
        $reviews=$this->modelR->getReviewsfromDB($id);
        $this->view->renderItem($logged,$item,$reviews);

    }
    function addItem()
    {
        $this->authHelper-> restrictLoggedIn();
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $descripcion = $_POST['descripcion'];
        $contenido = $_POST['contenido'];
        $precio = $_POST['precio'];
        $categoria = $_POST['id_categoria'];
        $this->model->insertItemOnDB($nombre, $marca, $descripcion, $contenido, $precio, $categoria);
        $this->view->redirectList();
    }
    function editItem()
    {
        $this->authHelper-> restrictLoggedIn();
        $id= $_POST['id_item'];
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $descripcion = $_POST['descripcion'];
        $contenido = $_POST['contenido'];
        $precio = $_POST['precio'];
        $categoria = $_POST['id_categoria'];
        $this->model->editItemDB($nombre, $marca, $descripcion, $contenido, $precio, $categoria, $id);
        $this->view->redirectList();
    }
    function deleteItem($id)
    {
        $this->authHelper-> restrictLoggedIn();
        $this->model->deleteItemFromDB($id);
        $this->view->redirectList();
    }
}