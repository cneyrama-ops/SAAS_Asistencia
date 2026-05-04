<?php
session_start();
session_destroy();
header("Location: ../vista/login/login.php");  // Ruta relativa desde controlador/ hacia vista/login/
exit();  // Buena práctica: detiene la ejecución del script después de la redirección
?>