<?php

//REQUIRE VIEW MODEL
require_once "./View/ProductsView.php";
require_once "./Model/ProductsModel.php";

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

    function Prueba(){
        $products = $this->model->GetProducts();
        $this->view->ShowPrueba($products);
    }
    
}

?>