<?php

require_once "./model/ItemsModel.php";
require_once "./view/ItemsAPIView.php";
require_once "./model/CategoriesModel.php";

class ItemsAPIController
{

    private $model;
    private $view;
    private $modelC;
    
    function __construct()
    {
        $this->model = new ItemsModel();
        $this->view = new ItemsView();
        $this -> modelC= new CategoriesModel();
    }

    function showItems()
    {
        
        $items= $this->model->getItemsFromDB();
        $categories = $this-> modelC->getCategoriesFromDB();
        $this->view->renderItems($items, $categories);
        
    }
    function showItem($id)
    {
        $item = $this->model->getItem($id);
        $this->view->renderItem($item);
    }
    function addItem()
    {
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
        $this->model->deleteItemFromDB($id);
        $this->view->redirectList();
    }
}