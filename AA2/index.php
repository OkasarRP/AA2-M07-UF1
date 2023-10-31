<?php

    session_start();

    require "src/router.php";    
    require "src/routes.php";


    try{
        $controller = getRoute($routes);
        if($controller == null){
            $controller = "login";
        }
        
        require 'controllers/'.$controller.".php";
    }catch(Exception $e){
        $_SESSION['error']=$e->getMessage();
        require 'public/error.php';
        
    }


