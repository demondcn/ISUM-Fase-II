<?php
session_start();
include("conexion.php");

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nit'];
    $password = $_POST['pass'];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT id, nameE FROM userE WHERE nitE = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        $row = $result->fetch_assoc();
        $userId = $row['id'];

        // Almacenar el ID del usuario en la sesión
        $_SESSION['userid'] = $userId;

        // Redirigir a la página de éxito
        echo "<p>Hola mundo</p>";
        header("Location: ../Surveys/context.php");
        exit();
    } else {
        // Credenciales incorrectas
        $mensajeError = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>