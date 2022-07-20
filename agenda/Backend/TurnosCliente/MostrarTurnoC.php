<?php
require("../../Backend/Conexion/conexion.php");
$idUsuario = $_SESSION["IdUsuario"];

$consulta = "SELECT idTurno,servicio,dia,mes,horario,Estado FROM turnos
WHERE idUsuario = $idUsuario ";


$resultado = mysqli_query($conexion,$consulta);



while($array = mysqli_fetch_assoc($resultado)){
    ?>

<tr>
<td><?php echo $array["servicio"];?></td>
<td><?php echo $array["dia"];?></td>
<td><?php echo $array["mes"];?></td>
<td><?php echo $array["horario"];?></td>

<?php if($array["Estado"]== "Confirmado"){?>

<td class="text-success"><?php echo $array["Estado"];?></td>

<?php
}
?>

<?php if($array["Estado"]=="Cancelado"){?>

<td class="text-danger"><?php echo $array["Estado"];?></td>

<?php
}
?>


<?php if($array["Estado"]== "En espera"){?>

<td class="text"><?php echo $array["Estado"];?></td>

<?php
}
?>


</tr> 


<?php

}

?>