<?php

require("../../Backend/Conexion/conexion.php");

if(isset($_POST["botonTurno"])){
$servicio = mysqli_real_escape_string($conexion,trim($_POST["txt_servicio"]));
$horario = mysqli_real_escape_string($conexion,trim($_POST["txt_horaTurno"]));
$dia = mysqli_real_escape_string($conexion,trim($_POST["txt_diaTurno"]));
$mes = mysqli_real_escape_string($conexion,trim($_POST["txt_mesTurno"]));
$telefono = mysqli_real_escape_string($conexion,trim($_POST["txt_telefonoTurno"]));
$estadoTurno = "En espera";
$IdUsuario = $_SESSION["IdUsuario"];

$consulta = "INSERT INTO turnos(servicio, horario, dia, mes, telefonoT,IdUsuario,Estado) VALUES (?,?,?,?,?,?,?)";
$sentencia = mysqli_prepare($conexion,$consulta);
mysqli_stmt_bind_param($sentencia,"sssssis",$servicio,$horario,$dia,$mes,$telefono,$IdUsuario,$estadoTurno);
$result = mysqli_stmt_execute($sentencia);




if($result){


echo '<i class="fa-solid fa-clipboard-check" style="color:green; font-size:40px;"></i>';

}




    
       



}





?>
