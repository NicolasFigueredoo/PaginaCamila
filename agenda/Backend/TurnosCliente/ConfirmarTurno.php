<?php

require("../../Backend/Conexion/conexion.php");

session_start();

$idCliente = $_SESSION["IdUsuario"];
$idAgenda = $_GET["id"];

$consulta = "UPDATE agenda SET Estado = 'Reservado', IdCliente = '$idCliente' WHERE codigoAgenda = $idAgenda";
$result = mysqli_query($conexion,$consulta);

header("location: ../../frontend/PaginaAgendar/agendarc.php ");







?>