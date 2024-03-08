<?php
// Iniciar sesión si aún no se ha iniciado
session_start();

// Destruir la sesión actual
session_destroy();

// Redirigir al usuario a la página de inicio de sesión (login)
header("Location: ../index.php");
exit; // Asegúrate de salir del script después de redirigir
?>