<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

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