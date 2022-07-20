<?php

require("../../Backend/Conexion/conexion.php");


if(isset($_POST["botonAgendar"])){

if(strlen($_POST["txt_numero"]) >= 1 && strlen($_POST["txt_dia"]) >= 1 && strlen($_POST["txt_mes"]) >= 1
&& strlen($_POST["txt_HoraInicio"]) >= 1 && strlen($_POST["txt_HoraFin"]) >= 1){

    $numero = mysqli_real_escape_string($conexion, trim($_POST["txt_numero"]));
    $dia = mysqli_real_escape_string($conexion, trim($_POST["txt_dia"]));
    $mes = mysqli_real_escape_string($conexion, trim($_POST["txt_mes"]));
    $desdeI = mysqli_real_escape_string($conexion, trim($_POST["txt_HoraInicio"]));
    $hastaF = mysqli_real_escape_string($conexion, trim($_POST["txt_HoraFin"]));
    $estado = "Libre";
    
    $consulta = "INSERT INTO agenda(Numero,dia, mes, desde,hasta,estado ) VALUES (?,?,?,?,?,?)";
    $sentencia = mysqli_prepare($conexion,$consulta);
    mysqli_stmt_bind_param($sentencia,"ssssss",$numero,$dia,$mes,$desdeI,$hastaF,$estado);
    $result = mysqli_stmt_execute($sentencia);
    
    if($result){
        echo '<i class="fa-solid fa-clipboard-check" style="color:green; font-size:40px;"></i>';
    }
    
    header("location: agendar.php");
    mysqli_stmt_close($sentencia);
}


}






?>
