<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST['iniciar_sesion'])) {
    // Obtener los datos del formulario
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    // Realizar la lógica de autenticación
    // Aquí puedes realizar la verificación de las credenciales en tu base de datos o cualquier otro método de autenticación

    // Ejemplo básico de verificación de credenciales
    $usuario_autenticado = false;

    // Verificar si las credenciales son válidas
    if ($correo_electronico === 'usuario@example.com' && $contrasena === 'contraseña') {
        $usuario_autenticado = true;
    }

    // Redireccionar al dashboard si las credenciales son válidas
    if ($usuario_autenticado) {
        header('Location: dashboard.php');
        exit(); // Terminar el script para evitar que se procese más código
    } else {
        // Mostrar mensaje de error si las credenciales no son válidas
        $mensaje_error = 'Las credenciales ingresadas no son válidas. Inténtalo nuevamente.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Login</title>
</head>
<body>
    <h1>Procesar Login</h1>

    <?php if (isset($mensaje_error)): ?>
        <p><?php echo $mensaje_error; ?></p>
    <?php endif; ?>

    <form action="procesar_login.php" method="POST">
        <label for="correo_electronico">Correo Electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
    </form>
</body>
</html>
