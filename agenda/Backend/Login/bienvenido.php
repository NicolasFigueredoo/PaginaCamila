<?php

session_start();


$nombreS = $_SESSION["nombre"];

if(!isset($nombreS)){

    header("location: ../../Backend/Login/salirlogin.php");


}{

    echo '
    <a class="nav-link " href="../../Backend/Login/salirlogin.php" name="botonExit" style="color:black;"  aria-current="page" >SALIR</i></a> 
    ';
}


?>
