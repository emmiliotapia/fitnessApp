<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_POST['nombre_completo']; 
    $correo_electronico = $_POST['correo_electronico']; 
    $contrasena = $_POST['contrasena']; 

    // Consulta SQL para insertar los datos en la tabla usuarios
    $query = "INSERT INTO usuarios (nombre_completo, correo_electronico, contrasena) 
              VALUES ('$nombre_completo', '$correo_electronico', '$contrasena')"; 

    if (mysqli_query($conexion, $query)) {
        // Registro insertado correctamente
        echo "Registro exitoso. ¡Gracias por registrarte!";
    } else {
        // Error al insertar el registro
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
    // Redireccionar al usuario al formulario de inicio de sesión
    header('Location: procesar_login.php');
    exit();
}
?>
