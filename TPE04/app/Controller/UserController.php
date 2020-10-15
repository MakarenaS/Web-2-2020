<?php

require_once "app/View/UserView.php";
require_once "app/Model/UserModel.php";

class UserController{

    private $view;
    private $model;

    function __construct(){

        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function LogIn(){

        $this->view->ShowLogIn();
    }

}

?>