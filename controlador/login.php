<?php


//metodo para guardar la sesión del usuario
session_start();

// Controlador para el proceso de login

 if(!empty($_POST["btningresar"])){

 // Validar que los campos no estén vacíos
 //si el campo usuario o password eno estan vacios entonces se ejecuta el proceso de login
    if(!empty($_POST['usuario']) and !empty($_POST['password'])){
        $usuario = $_POST['usuario'];
        $password = md5($_POST['password']);
        $sql = $conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' AND password='$password'");
        

        if ($datos=$sql->fetch_object()){
        $_SESSION['nombre'] = $datos->nombre;
        $_SESSION['apellido'] = $datos->apellido;
            header("Location: ../inicio.php");
        } else {
            //si el usuario o contraseña son incorrectos muestra este mensaje
            echo "<div class='alert alert-danger' >Usuario o contraseña incorrectos.</div>";
        }


    } else {
        //caso contrario muestra este mensaje
        echo "<div class='alert alert-danger' >Por favor, complete todos los campos.</div>";
  
    }
 }
 
?>