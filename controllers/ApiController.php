<?php

require_once "./model/ReviewsModel.php";
require_once "./view/ApiView.php";


class ApiController{

    private $model;
    private $view;
    private $data;

    function __construct()
    {
        $this->model = new ReviewsModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input"); 
        
    }
    function getData(){ 
        return json_decode($this->data); 
    }
   
    function getAll(){
        $reviews= $this->model->getAllFromDB();
        if($reviews){
            return $this->view->response($reviews, 200);}
        else{
            return $this->view->response(null, 202);
        }
    }
    function getReviews($params = null){
        $id_item = $params[":ID"];
        $reviews = $this->model->getReviewsfromDB($id_item);
        if($reviews){
            return $this->view->response($reviews,200);
        }else{
            return $this->view->response("Este item no tiene ningun review", 404);
        }
    }

    function getReview($params = null){
        $id_review = $params[":ID"];
        $review = $this->model->getReviewfromDB($id_review);
        if($review){
            return $this->view->response($review, 200);}
        else{
            return $this->view->response("No existe la resenia con id = $id_review", 400);
        }
    }

    function deleteReview($params = null){
    $id_review = $params[":ID"];
    $review = $this->model->getReviewfromDB($id_review);
    if($review){
        $review = $this->model->deleteReview($id_review);
        return $this->view->response("El comentario con el id=$id_review fue borrado", 200); 
    }else{
        $this->view->response("El comentario con el id=$id_review no existe", 404);
        }
    }
   
    function createReview(){
        $body = $this->getData();
        $review = $body->body;
        $punctuation = $body->punctuation;
        $id_item = $body->id_item;
        $this->model->insertReview($review, $punctuation, $id_item);
        $this->view->response("Comentario creado con exito", 200);
    }

    function orderReviews($params=null){
        $order = $_POST['order'];
        $id_item = $params[":ID"];
        $reviews = $this->model->getOrderedReviews($id_item, $order);
        if($reviews){
            return $this->view->response($reviews,200);
        }else{
            return $this->view->response("Este item no tiene ningun review", 404);
        }
    }
}