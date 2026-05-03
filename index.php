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
</head>
<body>
    <h1 class="nunito-400">BIENVENIDOS, REGISTRA TU ASISTENCIA</h1>
      <!-- Contenedor donde se mostrará la fecha y hora actual -->
    <h2 id="fecha"></h2>

    <div class="container">
        <a href="">INGRESAR AL SISTEMA</a>
        <p>Ingrese su DNI</p>
        <form action="">
            <input type="text" placeholder="DNI del empleado" name="txtdni">
            <a href="">ENTRADA</a>
            <a href="">SALIDA</a>
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

    
</body>
</html>