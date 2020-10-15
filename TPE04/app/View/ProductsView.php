<?php
require_once "./libs/smarty/Smarty.class.php";

class ProductsView {
    private $title;

    function __construct(){
        $this->title = "Lista de Productos";
    }

    function ShowProductInfo($products) {
 
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('products', $products);
              
        $smarty->display('templates/mainContent.tpl'); // muestro el template 
    }


   function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

}

?>