<?php

require_once "./View/ProductsView.php";
require_once "./Model/ProductsModel.php";

class ProductsController {

    private $view;
    private $model;

    function __construct() {
        $this->view = new ProductsView();
        $this->view = new ProductsModel();

    }

    private function checkLogueado() {
        
        //Inicio la sesion con PHP
        session_start();
    
        if( !isset($_SESSION["EMAIL"]) ) {

            header("Location: ". LOGIN);
            die();
        }
        else {
            if ( isset($_SESSION['LAST_ACTIVITY']) &&
            (time() - $_SESSION['LAST_ACTIVITY'] > 1000000) ) {

                header("Location: ". LOGOUT);
                die();
            }

            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function Home() {

        $this->checkLogueado();

        $products = $this->model->GetProducts();
        $this->view->ShowHome($products);

    }

    function InsertProduct(){ 

        $completed = 0;

        if ( isset($_POST['input_completed']) ) {
            $completed = 1;
        }
        $this->model->InsertTask($_POST['input_title'],$_POST['input_description'],$completed,$_POST['input_priority']);
        $this->view->ShowHomeLocation();
    }
}
?>