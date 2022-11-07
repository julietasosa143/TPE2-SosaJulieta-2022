<?php

class UserModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getUserByEmail($email)
    {
        $sentencia = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
        
    }
}