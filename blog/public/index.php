<?php

require('../app/Views/AuthView.php');
$view = new AuthView();
$model = new AuthModel();
$controller = new AuthController($model);

$model->addUser("JohnDoe", "1");
echo $model->getUser('JohnDoe');

if($_GET["action"]){
if ($_GET["action"] === "signup") {
        $controller->signupAction($_POST["username"], $_POST[" password"]);
}
if ($_GET["action"] === "login") {
    $controller->loginAction($_POST["username"]);
}
}else{
$view->showLoginForm();
$view->showSignupForm(); 
}