


<?php
require_once "./view/CategoriesView.php";
class CategoriesModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getCategoriesFromDB()
    {
        $sentencia = $this->db->prepare("SELECT * FROM categories");
        $sentencia->execute();
        $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
    function getCategoryForItem($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM categories WHERE id_categoria = ?");
        $sentencia->execute(array($id));
        $category = $sentencia->fetch(PDO::FETCH_OBJ);
        return $category;
    }
    function insertCategoryOnDB($nombre, $descripcion)
    {
        $sentencia = $this->db->prepare("INSERT INTO categories (nombre,descripcion) VALUES (?, ?)");
        $sentencia->execute(array($nombre, $descripcion));
    }
    function editCategoryDB($id, $nombre, $descripcion)
    {
        $sentencia = $this->db->prepare("UPDATE categories SET nombre=?, descripcion=? WHERE id_categoria=?");
        $sentencia->execute(array($nombre, $descripcion, $id));
    }
    function deleteCategoryFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM categories WHERE id_categoria=?");
        $sentencia->execute(array($id));
    }
}