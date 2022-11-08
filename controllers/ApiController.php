<?php

require_once "./model/ReviewsModel.php";
require_once "./View/ApiView.php";

class ApiController{

    private $model;
    private $view;
   

    function __construct()
    {
        $this->model = new ReviewsModel();
        $this->view = new ApiView();
    }

    function getReviews($params = null){
        $id_item = $params[":ID"];
        $review = $this->model->getReviewsfromDB($id_item);
        if($review){
            return $this->view->response($review, 200);}
        else{
            return $this->view->response(null, 202);
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
   

    function createReview($params = null){


            $body = $this->getBody();
            $reviews = $body->body;
            $punctuation = $body->punctuation;
            $id_item = $body->id_item;
            $date = $body->date;
            
            $this->model->insertReview($reviews,$date, $punctuation, $id_item);
            $this->view->response("Comentario creado con exito", 200);
            }


    function getBody(){
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}