<?php

//REQUIRE VIEW MODEL
require_once "app/View/ProductsView.php";
require_once "app/Model/ProductsModel.php";

class ProductsController { 

    private $view;
    private $model;

    function __construct(){
        $this->view = new ProductsView();
        $this->model = new ProductsModel();
    }

    function Home(){
        $products = $this->model->GetProducts();
        $this->view->ShowProductInfo($products);
    }
    
    function GetProductById($params = null) {

        //OBTENGO EL ID PASADO POR PARAMETRO
        $product_id = $params[":ID"];

        $product = $this->model->GetProductByIdModel($task_id);
        
        // VER SI NECESITA EL PARAMETRO
        $this->view->GetProductByIdView($task_id);
    }
}

?>