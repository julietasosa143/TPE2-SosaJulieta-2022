<?php
class ReviewsModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }
    function getAllFromDB(){
        $sentencia= $this->db->prepare("SELECT * FROM reviews");
        $sentencia->execute();
        $reviews=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }

    function getReviewsfromDB($id_item)
    {
        $sentencia = $this->db->prepare("SELECT * FROM reviews WHERE item = ?");
        $sentencia->execute(array($id_item));
        $reviews = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }

    function getReviewfromDB($id_review)
    {
        $sentencia = $this->db->prepare("SELECT * FROM reviews WHERE id_review = ?");
        $sentencia->execute(array($id_review));
        $review = $sentencia->fetch(PDO::FETCH_OBJ);
        return $review;
    }

    function insertReview($body, $punctuation, $id_item)
    {
        $sentencia = $this->db->prepare("INSERT INTO reviews (body,punctuation,id_item) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($body, $punctuation, $id_item));
    }

    function deleteReview($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM reviews WHERE id_review=?");
        $sentencia->execute(array($id));
    }
    
    function getOrderedReviews($id_item, $order){
        if($order===1){
            $sentencia = $this->db->prepare("SELECT * FROM reviews WHERE item = ? ORDER BY DESC");
        }
        else if($order===2){
            $sentencia = $this->db->prepare("SELECT * FROM reviews WHERE item = ? ORDER BY ASC"); 
        }else if ($order===0){
            $sentencia = $this->db->prepare("SELECT * FROM reviews WHERE item = ?");
        }
        $sentencia->execute(array($id_item));
        $reviews = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }
    function orderAttributeBy($sort,$order)
    {
        $sentencia->$this->db->prepare("SELECT $sort FROM reviews ORDER BY $order");
        $sentencia->execute();
        $reviews = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }

    
}