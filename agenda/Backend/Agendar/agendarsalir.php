<?php

session_start();


$nombreS = $_SESSION["nombre"];


if(!isset($nombreS)){

    header("location: ../../Backend/Login/salirlogin.php");


}{

    echo "Bienvenido $nombreS";
    echo '<a name="botonExit" href="../../Backend/Login/salirlogin.php">Salir</a>';
}


?>