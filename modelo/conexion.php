<?php

$conexion = new mysqli(
    "127.0.0.1",
    "root",
    "",
    "saas_asistencia",
    3308
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
    date_default_timezone_set("America/Trujillo");
}

?>