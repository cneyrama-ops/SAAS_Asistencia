<?php
// Conexión a la base de datos utilizando PDO
$conexion = new mysqli("localhost", "root", "", "sistema_asistencia2", "3306");
$conexion->set_charset("utf8");
date_default_timezone_set("America/Lima");
?>