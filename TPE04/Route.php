<?php


// REQUIRES CONTROLLERS
require_once 'Controller/ProductsController.php';

require_once 'RouterClass.php';


// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');


$ruta = new Router();

//rutas

$ruta->addRoute("home","GET","ProductsController","Home");

//ruta por defecto
$ruta->setDefaultRoute("ProductsController", "Home");

//run
$ruta->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

?>