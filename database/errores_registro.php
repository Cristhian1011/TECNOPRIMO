<?php

session_start();

include_once('conexion.php');

if (isset($_POST['nombre']) && isset($_POST['gmail']) &&  isset($_POST['contrasena']) && isset($_POST['repetir']))
{
    function validar($info){
        $info = trim($info);
        $info = stripcslashes($info);
        $info = htmlspecialchars($info);
        
        return $info;
    }


    $nombre =validar($_POST['nombre']);
    
    $gmail =validar($_POST['gmail']);
    
    $pass =validar($_POST['contrasena']);
    
    $repass =validar($_POST['repetir']);

    $infonombre = 'nombre=' . $nombre;

    if (empty($nombre)){
        header("location: ../ventanas/registro.php?error= El nombre de usuario es necesario&$infonombre");
        exit();
    }
    elseif(empty($gmail)){
        header("location: ../ventanas/registro.php?error= El gmail es necesario&$infonombre");
        exit();
    }
    elseif(empty($pass)){
        header("location: ../ventanas/registro.php?error= La contraseña es necesaria&$infonombre");
        exit();
    }
    elseif(empty($repass)){
        header("location: ../ventanas/registro.php?error= repertir la contraseña es necesaria&$infonombre");
        exit();
    }
    elseif($pass !== $repass){
        header("location: ../ventanas/registro.php?error= Upss la clave no coincide..&$infonombre");
        exit();
    }
    else{

        $guardar_PK = "SELECT * FROM `registro` WHERE `NomUsu_R` = '$nombre'";
        $confirmacion = $conexion->query($guardar_PK);

        $guardar_email = "SELECT * FROM `registro` WHERE `Gmail_R` = '$gmail'";
        $confirmacion1 = $conexion->query($guardar_email);

        
      if (mysqli_num_rows($confirmacion) > 0) {
        header("location: ../ventanas/registro.php?error=El nombre de usuario ya esta en uso&$infonombre");
        exit();
      } 
      if(mysqli_num_rows($confirmacion1) > 0){
        header("location: ../ventanas/registro.php?error=El gmail ya esta asociado a una cuenta..&$infonombre");
        exit();
      }
      else {   
  
           $guardar_datos = "INSERT INTO `registro` (`NomUsu_R`, `Gmail_R`, `Contrasena_R`) VALUES ('$nombre', '$gmail', '$pass')";
           $confirmacion1 = $conexion->query($guardar_datos);

           if($confirmacion1){
            header('location: ../ventanas/registro.php?ok= USUARIO REGISTRADO EXITOSAMENTE'); 
           }
           else{
            header('location: ../ventanas/registro.php?okr= ERROR');
            exit();
           }
          }
       }
}
else{
    header('location: ../ventanas/registro.php');
}
 
 

?>