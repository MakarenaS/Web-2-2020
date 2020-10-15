<?php


// REQUIRES CONTROLLERS
require_once 'app/Controller/ProductsController.php';
require_once 'app/Controller/UserController.php';

require_once 'RouterClass.php';


// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');


$ruta = new Router();

//rutas

$ruta->addRoute("home","GET","ProductsController","Home");
$ruta->addRoute("productos","GET","ProductsController","Home");

$ruta->addRoute("productos/:ID","GET","ProductsController","GetCatByID");

//users

$ruta->addRoute("login","GET","UserController","LogIn");


//ruta por defecto
$ruta->setDefaultRoute("ProductsController", "Home");

//run
$ruta->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

?>