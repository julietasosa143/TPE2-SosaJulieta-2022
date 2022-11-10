<?php
class ReviewsModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tomiylau;charset=utf8', 'root', '');
    }
    function getAll(){
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

    function getReviewfromDB($id_item)
    {
        $sentencia = $this->db->prepare("SELECT * FROM reviews WHERE id_review = ?");
        $sentencia->execute(array($id_item));
        $reviews = $sentencia->fetch(PDO::FETCH_OBJ);
        return $reviews;
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

    
}