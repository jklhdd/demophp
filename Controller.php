<?php
class Controller
{
    public function invoke(){
        if($_GET['route'] == ""){
            $this->home();
        
        }else if($_GET['route'] == "login"){
            $this->login();
        }
        else if($_GET['route'] == "getform"){
            include_once("function/views/postlogin.php");
        }
        else if($_GET['route'] == "demophpsql"){
            include_once("function/views/demophpsql.php");
        }    
        else{
            echo "404 Not Found";
        }
    }    
    public function home(){
        include_once("function/views/home.php");
    }
    public function login(){
        include_once("function/views/login.php");
    }
}

$controller = new Controller();
$controller->invoke();