<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_register_db";

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Si deseas mostrar un mensaje de conexión exitosa, puedes descomentar la siguiente línea
// echo "Conexión exitosa a la base de datos";

?>