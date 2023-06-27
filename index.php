<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>REGISTRO E INICIO DE SESION</title>
</head>
<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-child">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesion con tus datos</p>
                <button type="submit" id="sign-in">Iniciar Sesion</button>
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-child">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>o usa tu email para registrarte</p>
                <form action="php/registro_usuario_be.php" method="POST" class="form">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    </label>
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" placeholder="Correo Electronico" name="correo_electronico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                    </label>
                    <input type="submit" value="Registrarse" name="registrarse">
                </form>
            </div>
        </div>
    </div>

    <div class="container-form login hide">
        <div class="information">
            <div class="info-child">
                <h2>Bienvenido Nuevamente</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <button type="button" id="sign-up">Registrarse</button>
            </div>
        </div>


        <div class="form-information">
            <div class="form-information-child">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>o Iniciar Sesión con una cuenta</p>
                <!-- Formulario de inicio de sesión -->
                <form class="form" action="php/procesar_login.php" method="POST">
                    <!-- Campos del formulario -->
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo Electrónico" name="correo_electronico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                    </label>
                    <input type="submit" value="Iniciar Sesión" name="iniciar_sesion">

                    <!-- Mostrar mensaje de error si existe -->
                    <?php if (isset($_GET['error'])): ?>
                        <div class="error-message">Las credenciales ingresadas no son válidas. Inténtalo nuevamente.</div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/script.js"></script>
</body>
</html>
