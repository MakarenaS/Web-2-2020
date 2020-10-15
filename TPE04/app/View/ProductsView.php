<?php
require_once "./libs/smarty/Smarty.class.php";

class ProductsView {
    private $title;

    function __construct(){
        $this->title = "Lista de Productos";
    }

    function ShowbyCategories($categories,$products) {
 
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('products', $products);
        $smarty->display('templates/mainContent.tpl'); // muestro el template 
    }

    function ShowbyCategoriesbyID($categories,$category_id,$products) {
 
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('category_id', $category_id);
        $smarty->assign('products', $products);
        $smarty->display('templates/mainContentbyCategory.tpl'); // muestro el template 
    }

   function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

}

?>