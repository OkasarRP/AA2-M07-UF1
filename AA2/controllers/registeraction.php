<?php
    require 'connection.php';             
            
    if (isset($_POST["email"]) and isset($_POST["password"]) and isset($_POST["confirmpassword"]) and isset($_POST["user"]) and isset($_POST["type"])){
        if($_POST["password"] == $_POST["confirmpassword"]){
            
                $_SESSION["type"] = $_POST["type"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT,['cost'=>4]);
                $_SESSION["user"] = $_POST["user"];

                if($_SESSION["type"]=="Profesor"){
                    $_SESSION["type"] = 1;
                }else{
                    $_SESSION["type"] = 2;
                }
                
                $info=["user"=>$_SESSION["user"],"email"=>$_SESSION["email"],"password"=>$_SESSION["password"],"id_rol"=>$_SESSION["type"]];

                //$connection=connectMysql($dsn,$dbuser,$dbpass);

                if(insert($connection,'users',$info)==true){
                    session_unset();
                    header("Location:login");
                
                }else{
                    echo render('error');
                }
                
                
        }else{
                
                $_SESSION["confirmpassword"] = $_POST["confirmpassword"];
                $_SESSION["password"] = $_POST["password"];
                
                echo render('register',['title' => 'Registro']);
        }
    }else{
        echo render('register',['title' => 'Registro']);
        session_unset();
    }