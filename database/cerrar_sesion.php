<?php
session_start();
session_unset();
session_destroy();

header("location: ../ventanas/Iniciar_Sesion.php");

?>
