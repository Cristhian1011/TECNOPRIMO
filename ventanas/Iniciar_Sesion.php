<!DOCTYPE html>
<html lang="es">

<head>
    <title>TECNOPRIMO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="../css/Iniciar_Sesion.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="icon" sizes="32x32" href="../imagenes/logo.png" type="image/x-icon">
</head>

<body>

    <header class="header">
        <div class="container">
            <h1 onclick="window.location.href='../index.html'"><a>tecno</a><span>primo</span></h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="../index.html"> Inicio </a>
                <a href="info.html">Info</a>
                <a href="registro.php">Regristrase</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="seccion_form">
            <div class="formulario">
                <img src="../imagenes/tecnoprimo.png">
                <h1>Inicio de sesión</h1>
                <form action="../database/errores_iniciar.php" method="post">
                <?php
                    if (isset($_GET['error'])) { ?>
                      <p style="color: red; z-index: 999; text-shadow: 0.1vw 0.1vw 0.2vw rgba(0, 0, 0, 10); font-size: 20px;"
                       class="error"><?php  echo  $_GET['error']?> </p>
                    <?php } ?>
           
                    <div class="username">
                        <input name="usuario" type="text" title="NOMBRE DE USUARIO" required>
                        <label>Nombre de usuario</label>
                    </div>
                    <div class="username">
                        <input name="pass" type="password" title="CONTRASEÑA" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="recordar">
                        <a href="recuperar.html">¿Olvidó su contraseña?</a>
                    </div>
                    <input type="submit" value="Iniciar Sesión">
                    <div class="registrarse">
                        <a href="registro.php">Quiero hacer el <span style="color: blue;">Registro</span></a>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            Tecnoprimo WEB &copy; 2023
        </footer>
    </main>

</body>

</html>
