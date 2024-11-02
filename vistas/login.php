<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    Iconos      -->
    <link rel="stylesheet" 
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
         integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
         crossorigin="anonymous" 
         referrerpolicy="no-referrer" 
    />

    <!--    CSS      -->
    <link rel="stylesheet" href="./css/login-estilos.css">

    <title>Login</title>
</head>

<body>
    
    <main>
        
        <div class="login-contenedor" id="login-contenedor">

            <div class="formulario-contenedor registrarse">
                <form action="">
                    <h1>Crear cuenta</h1>

                    <div class="iconos-redes">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                        <a href="#"><i class="fa-solid fa-tv"></i></i></a>
                    </div>

                    <span>O usa tu cuenta gmail y datos para registrarte</span>

                    <input type="text" name="" placeholder="Nombre">
                    <input type="email" name="" placeholder="Correo electrónico">
                    <input type="password" name="" placeholder="Contraseña">

                    <button>Registrarse</button>
                </form>
            </div>

            <div class="formulario-contenedor acceder">
                <form action="">
                    <h1>Iniciar sesión </h1>

                    <div class="iconos-redes">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                        <a href="#"><i class="fa-solid fa-tv"></i></i></a>
                    </div>

                    <span>Ingresa tu correo y contraseña</span>

                    <input type="email" name="" placeholder="Correo electrónico">
                    <input type="password" name="" placeholder="Contraseña">

                    <a href="">¿Olvidaste tu contraseña?</a>

                    <button>Acceder</button>
                </form>
            </div>

            <div class="interruptor-contenedor">
                <div class="interruptor">

                    <div class="interruptor-panel interruptor-izquierdo">
                        <h1>Bienvenido de</h1>

                        <p>Si ya tienes una cuenta ingresa tus datos para acceder al <strong>Repositorio digital UGMA</strong></p>

                        <button class="oculto" id="acceder">Acceder</button>
                    </div>

                    <div class="interruptor-panel interruptor-derecho">
                        <h1>Bienvenido</h1>

                        <p>¿Aún no estás registrado? crea un usuario especial y accede a todo el contenido disponible en <strong>Repositorio digital UGMA</strong></p>

                        <button class="oculto" id="registrarse">Registrarse</button>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <footer></footer>

    <script src="./js/script_login.js"></script>
</body>
</html>
