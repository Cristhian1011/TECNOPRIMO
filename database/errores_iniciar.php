<?php

session_start();

include_once('conexion.php');

if (isset($_POST['usuario']) && isset($_POST['pass']))
{
    function validar($info){
        $info = trim($info);
        $info = stripcslashes($info);
        $info = htmlspecialchars($info);
        
        return $info;
    }

    
    $usuario =validar($_POST['usuario']);
    
    $pass =validar($_POST['pass']);
    
 

    
    if (empty($usuario)){
        header("location: ../ventanas/iniciar_Sesion.php?error= El nombre de usuario es necesario");
        exit();
    }
    elseif(empty($pass)){
        header("location: ../ventanas/iniciar_Sesion.php?error= La contraseña es necesaria");
        exit();
    }

    else{
       

        $guardar_PK = "SELECT * FROM `registro` WHERE  `NomUsu_R` = '$usuario' AND `Contrasena_R` = '$pass'";

        $confirmacion = mysqli_query($conexion, $guardar_PK);

        if (mysqli_num_rows($confirmacion) === 1) {
            $row= mysqli_fetch_assoc($confirmacion);
            if($row['NomUsu_R'] === $usuario && $row['Contrasena_R'] === $pass)
            {
                $_SESSION['NomUsu_R'] = $row['NomUsu_R'];
              
                header("location: ../ventanas_Premium/premium.php");
             
                exit();
            }
            else{
                header("location:../ventanas/iniciar_Sesion.php?error=El usuario o la clave son incorectos");
                exit();
            }
          } 
          else{
            header("location: ../ventanas/iniciar_Sesion.php?error=El usuario o la clave son incorectos");
            exit();
        }
      
    }
}
else{
    header("location: ../ventanas/iniciar_Sesion.php");
    exit();
}

    ?>