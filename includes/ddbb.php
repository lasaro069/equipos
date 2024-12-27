<?php

    // inicialmos una sesión para poder enviar mensajes
    session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehiculos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);



// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensaje = "Conexion exitosa";
echo "<script type='text/javascript'>showAlert('$mensaje');</script>";
?>



<script> function showAlert(mensaje) { alert(mensaje); } </script>





<script src="../js/app.js"></script>