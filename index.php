<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de bienvenida</title>
    <link rel="stylesheet" href="public/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- pNotify -->
        <link href="public/pnotify/css/pnotify.css" rel="stylesheet" />
        <link href="public/pnotify/css/pnotify.buttons.css" rel="stylesheet" />
        <link href="public/pnotify/css/custom.min.css" rel="stylesheet" />
    <!-- pnotify -->
        <script src="public/pnotify/js/jquery.min.js">
        </script>
        <script src="public/pnotify/js/pnotify.js">
        </script>
        <script src="public/pnotify/js/pnotify.buttons.js">
        </script>
</head>
<body>
    <?php
     date_default_timezone_set("America/Lima");
    ?>
    <h1 >BIENVENIDOS, REGISTRA TU ASISTENCIA</h1>
      <!-- Contenedor donde se mostrará la fecha y hora actual -->
    <h2 id="fecha"><?= date("d/m/Y, h:i:s")?></h2>
    <?php
    include "modelo/conexion.php";
    include "controlador/cotrolador_registrar_asistencia.php";
    ?>
    <div class="container">
        <a class="acceso" href="vista/login/login.php">INGRESAR AL SISTEMA</a>
        <p class="dni" >Ingrese su DNI</p>
        <form action="" method="POST">
        <input type="number" placeholder="DNI del empleado" name="txtdni" id="txtdni">
           <div class="botones">
               <button id="salida" class="salida"type="submit" name ="btnsalida" value="ok">SALIDA</button id="">
               <button id="entrada" class="entrada"type="submit" name ="btnentrada" value="ok">ENTRADA</button>
           </div>
        </form>
    </div>

    <script>

        setInterval(() => {

         // Obtiene la fecha y hora actual del sistema
        let fecha=new Date();

        // Convierte la fecha y hora a un formato legible
        let fechahora=fecha.toLocaleString();

         // Inserta la fecha y hora en el elemento con id="fecha"
        document.getElementById("fecha").textContent=fechahora;
        }, 1000);


    </script>
    <script>
        let dni=document.getElementById("txtdni");
        dni.addEventListener("input", function() {
            if (this.value.length > 8) {
                this.value=this.value.slice(0,8)
            }
        })


        //Eventos para la entrada y salida con el teclado <- ->
        document.addEventListener("keyup",function(event){
            if (event.code=="ArrowLeft") {
                document.getElementById("salida").click()
            } else {
                if (event.code=="ArrowRight") {
                    document.getElementById("entrada").click()
                }
            }
        }) 
    </script>
    
</body>
</html>