<?php
require_once "./libs/smarty/Smarty.class.php";

class ProductsView {
    private $title;

    function __construct(){
        $this->title = "Lista de Productos";
    }

    function ShowProductInfo($products) {
 
        $smarty = new Smarty();
        $smarty->assign('products', $products);
              
        $smarty->display('templates/inicio.tpl'); // muestro el template 
    }


}

?>