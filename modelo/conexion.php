<?php
// Conexión a la base de datos utilizando PDO
$conexion = new mysqli("localhost", "root", "P@to12345", "sis_asistencia", "3306");
$conexion->set_charset("utf8");
date_default_timezone_set("America/Lima");
?>