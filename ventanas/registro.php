
<head>
    <title>TECNOPRIMO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="../css/registro.css">
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
                <a href="Iniciar_Sesion.php">Iniciar Sesión</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="seccion_form">
            <div class="formulario">
                <img src="../imagenes/tecnoprimo.png">
                <h1>REGISTRO</h1>
          
                <form action="../database/errores_registro.php" method="post">
                <?php
                    if (isset($_GET['error'])) { ?>
                      <p style="color: red; z-index: 999; text-shadow: 0.1vw 0.1vw 0.2vw rgba(0, 0, 0, 10); font-size: 20px;"
                       class="error"><?php  echo  $_GET['error']?> </p>
                    <?php } ?>
                  
                    <?php
                    if (isset($_GET['ok'])) { ?>
                      <p style="color: red; z-index: 999; text-shadow: 0.1vw 0.1vw 0.2vw rgba(0, 0, 0, 10); font-size: 20px;"
                      class="ok"><?php  echo  $_GET['ok']?> </p>
                    <?php } ?>
           
                    <div class="username">
                        <input  name="nombre" type="text" title="NOMBRE DE USUARIO" required>
                        <label>Nombre de usuario</label>
                    </div>
                    <div class="username">
                        <input  name="gmail" type="email" title="EMAIL" required  >
                        <label>Correo electrónico</label>
                    </div>
                    <div class="username">
                        <input name="contrasena" type="password" title="CONTRASEÑA" minlength="9" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="username">
                        <input name="repetir"  type="password" title="REPETIR" minlength="9" required>
                        <label>Confirmar Contraseña</label>
                    </div>
            
                    <input type="submit" value="Registrarse">
                    <div class="registrarse">
                        <a href="Iniciar_Sesion.php">Estoy registrado <span style="color: rgb(0, 17, 255);">Iniciar Sesión</span> </a>
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
