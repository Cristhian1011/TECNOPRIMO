<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "TECNOPRIMO";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion) {
   echo "conexion fallida";
}

?>
 
