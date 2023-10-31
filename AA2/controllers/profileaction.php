<?php

require 'connection.php';   

if(isset($_POST['user']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['DNI'])&& isset($_POST['phone']) && isset($_POST['street']) ){

                $passwordNewUser=password_hash($_POST['DNI'],PASSWORD_DEFAULT,['cost'=>4]);

                $info=["user"=>$_POST["user"],"nombre"=>$_POST["name"],"email"=>$_POST["emaIL"],"dni"=>$_POST["DNI"],"phone"=>$_POST["phone"],"street"=>$_POST["street"],"id_rol"=>"2","password"=>$passwordNewUser ];

                if(insert($connection,'users',$info) == true){
                
                    header("Location:home");
                
                }


}else{
    header("Location:profile");
}