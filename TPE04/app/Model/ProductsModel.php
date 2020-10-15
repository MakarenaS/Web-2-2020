<?php

class ProductsModel {

    private $db;

    function __construct() {

        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }

    function GetProducts(){
        
        $query = $this->db->prepare('SELECT * FROM product');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;

    }

    function GetProductByIdModel($product){

        //el id pasado por parametro es lo elegido en la tabla para traer 
        $sentencia = $this->db->prepare("SELECT * FROM product WHERE id=?");
        $sentencia->execute(array($product));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}

?>