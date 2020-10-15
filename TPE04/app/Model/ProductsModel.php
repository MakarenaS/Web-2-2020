<?php

class ProductsModel {

    private $db;

    function __construct() {

        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }

    function GetCategories(){
        
        $query = $this->db->prepare('SELECT * FROM category');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;

    }

    function GetProducts(){
        
        $query = $this->db->prepare('SELECT * FROM product');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;

    }

    function GetAllByCatID($category_id){
        $sentencia = $this->db->prepare("SELECT FROM category WHERE id=?");
        $sentencia->execute(array($category_id));
    }

}

?>