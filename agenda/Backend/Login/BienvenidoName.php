<?php



$nombreS = $_SESSION["nombre"];

if(!isset($nombreS)){

    header("location: ../../Backend/Login/salirlogin.php");


}{

    echo '
    <p id="Textoimg">Bienvenida <br> ',strtoupper($nombreS),'!</p>
    ';
}


?>
