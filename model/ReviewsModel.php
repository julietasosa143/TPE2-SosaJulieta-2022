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

    function insertReview($review, $estrellas, $item)
    {
        $sentencia = $this->db->prepare("INSERT INTO reviews (review,estrellas,item) VALUES (?, ?, ?)");
        $sentencia->execute(array($review, $estrellas, $item));
    }

    function deleteReview($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM reviews WHERE id_review=?");
        $sentencia->execute(array($id));
    }
    
    function orderBy($sort,$order)
    {
        if($order=='desc'){
            if($sort=='id_review'){
                $sentencia =$this->db->prepare("SELECT * FROM reviews ORDER BY id_review DESC");
            }else if($sort=='review'){
                $sentencia= $this->db->prepare("SELECT * FROM reviews ORDER BY review DESC");
            }else if($sort=='estrellas'){
                $sentencia =$this->db->prepare("SELECT * FROM reviews ORDER BY estrellas DESC");
            }else if($sort=='item'){
                $sentencia =$this->db->prepare("SELECT * FROM reviews ORDER BY item DESC");
            }
        }else if($order=='asc'){
            if($sort=='id_review'){
                $sentencia =$this->db->prepare("SELECT * FROM reviews ORDER BY id_review ASC");
            }else if($sort=='review'){
                $sentencia= $this->db->prepare("SELECT * FROM reviews ORDER BY review ASC");
            }else if($sort=='estrellas'){
                $sentencia =$this->db->prepare("SELECT * FROM reviews ORDER BY estrellas ASC");
            }else if($sort=='item'){
                $sentencia =$this->db->prepare("SELECT * FROM reviews ORDER BY item ASC");
            }
        }
        $sentencia->execute();
        $reviews = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }
    function filterReviews($filter, $value){
        $sentencia= $this->db->prepare("SELECT * FROM reviews WHERE ? = ?");
        $sentencia->execute(array($filter, $value));
        $reviews = $sentencia ->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }

    
}