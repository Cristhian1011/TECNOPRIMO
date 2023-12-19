<?php session_start();       
$nomUsu = $_SESSION['NomUsu_R'];

if (empty($_SESSION['NomUsu_R'])) {

    header("location: ../ventanas/Iniciar_Sesion.php");
    exit();
}


 ?>
<!DOCTYPE html>
<html lang="es">

<head>
        <title>TECNOPRIMO</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-
        width, user-scalable, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/tecnoP.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="icon" sizes="32x32" href="imagenes/logo.png" type="image/x-icon">
</head>

<body>

    <header class="header">
        <div class="container">
         <h1 onclick="window.location.href='premium.php'"><a>tecno</a><span>primo</span> </h1>

         <input type="checkbox" id="menu-bar"> 
         <label class="icon-menu" for="menu-bar"></label>
         <nav class="menu">
            <a href="infoP.html">Info</a>
            <a href="premium.php">Historial</a>
            <a href="premium.php">Sugerencias</a>
            <li><a1 class='Sesion'> <?php echo "<p > $nomUsu </p>";?> </a1>
         <ul> 
           <li>
               <a class='Sesion1' href="../database/cerrar_sesion.php">Cerrar Sesión</a>
           </li>
         </ul>
    </li>
         </nav>
     
        </div>
    </header>
    <main>
        <section id="Banner">
            <img src="../imagenes/tecnoprimo.png" >
        </section>

        <section id="url">
            <div class="searchBox">

              <input class="buscar_Texto" type="text" name="" placeholder="Ingrese URL o link">
          
              <img src="../imagenes/BUSCAR.png">

             </div>

             <button class="searchButton" href="#">BUSCAR</button>

        </section>
        <footer>
            Tecnoprimo WEB &copy; 2023
        </footer>
        
    </main>
     
   

</body>
</html>
