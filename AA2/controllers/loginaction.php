<?php  
require 'connection.php';  
require 'src/render.php';   

if(($sesion_id = session_id()) == null){
    session_start();
}
//loginaction
//comprobar los campos proporcionados
if(isset($_POST['user']) and $_POST['password']){

        $user = $_POST['user'];
        filter_input(INPUT_POST,$user, FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        filter_input(INPUT_POST,$password, FILTER_SANITIZE_STRING);

    //si existe en la base de datos


    //$connection=connectMysql($dsn,$dbuser,$dbpass);
    if ($connection) {
       
        if(auth($connection,$user,$password)==true) {
            
            header('Location:home');
        }else{
            echo render('login',['title' => 'Login']);
        }
    } 
}else{
    echo render('login',['title' => 'Login']);
}


//redireccionamos a dashboard


// si no vamos a home


//     die("Error de conexión: " . mysqli_connect_error());
    // }else{
    //     $resultado = mysqli_query($conexion, $sql);
    //     $fila = mysqli_fetch_assoc($resultado);
    //     if($fila){

    //         $_SESSION['user'] = $fila['user'];
    //         $_SESSION['email'] = $email;            
    //         $_SESSION['rol'] = $fila['rol'];
            
    //         header('Location:home');

    //     }else{
    //         echo "Usuario o contraseña incorrectos";
    //     }