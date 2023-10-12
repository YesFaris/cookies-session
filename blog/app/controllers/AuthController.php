<?php
require("../Models/AuthModel.php");
 class AuthController {
    private $model;
    public function __construct( AuthModel $model){
        $this->model = $model;
    }
    public function signupAction($usersname, $password){
        $this->model->addUser($usersname, $password);
    }
    public function loginAction($usersname){
      return $this->model->getUser($usersname);
    }
 }