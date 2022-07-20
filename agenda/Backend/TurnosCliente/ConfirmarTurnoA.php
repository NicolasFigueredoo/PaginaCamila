<?php

require("../../Backend/Conexion/conexion.php");


session_start();

$idCliente = $_SESSION["IdUsuario"];
$idTurno = $_GET["id"];

$consulta = "UPDATE turnos SET Estado = 'Confirmado' WHERE Idturno = $idTurno";
$result = mysqli_query($conexion,$consulta);



header("location: ../../frontend/PaginaTurnos/Turnos.php");







?>