<?php

require_once "./models/ItemsModel.php";
require_once "./models/CategoriesModel.php";
require_once "./views/ApiView.php";

class ApiController{

    private $model;
    private $view;
   

    function __construct()
    {
        $this->model = new ItemsModel();
        $this->modelC = new CategoriesModel();
        $this->view = new ApiView();
    }

    function getItems(){
        $items = $this->model->getItemsFromDB();
        if($items){
         return $this->view->response($items, 200);
        }
        else{
            return $this->view->response(null,404);
        }
    }
    
    function getCategories(){
        $categories= $this->modelC->getCategoriesFromDB();
        if($categories){
            return $this->view->response($categories,200);
        }
        else {
            return $this->view->response(null,404);
        }

    }
}