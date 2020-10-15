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
        $categories = $this->model->GetCategories();
        $products = $this->model->GetProducts();
        $this->view->ShowbyCategories($categories,$products);
    }
    

    function GetCatByID($params = null){
        
        $category_id = $params[':ID'];
        $categories = $this->model->GetCategories();
        $products = $this->model->GetProducts();

        $this->model->GetAllByCatID($category_id);
        $this->view->ShowbyCategoriesbyID($categories,$category_id,$products);

        
    }

    
}

?>