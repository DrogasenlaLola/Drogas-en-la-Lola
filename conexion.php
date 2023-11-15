<?php

$server = "localhost";
$user ="root";
$pass ="";
$db = "base_de_datos";

$conexion = new mysqli($server, $user, $pass, $db);

/*if($conexion-> connect_errno) {
    die ("la conexion ha fallado" . $conexion ->connect_errno);
    
} else{ echo "conectado"; }*/

?>
