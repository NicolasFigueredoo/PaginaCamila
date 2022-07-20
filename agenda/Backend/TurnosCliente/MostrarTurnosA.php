<?php
require("../../Backend/Conexion/conexion.php");
$consulta = "SELECT usuario.nombre,turnos.telefonoT,turnos.idTurno,turnos.servicio,turnos.dia,turnos.mes,turnos.horario,turnos.Estado FROM turnos,usuario
WHERE turnos.idUsuario = usuario.idUsuario";
$resultado = mysqli_query($conexion,$consulta);



while($array = mysqli_fetch_assoc($resultado)){
    ?>

<tr>
<td><?php echo $array["nombre"];?></td>
<td><?php echo $array["telefonoT"];?></td>
<td><?php echo $array["servicio"];?></td>
<td><?php echo $array["dia"];?></td>
<td><?php echo $array["mes"];?></td>
<td><?php echo $array["horario"];?></td>
<td><?php echo $array["Estado"];?></td>


<?php if($array["Estado"]== "Confirmado"){?>

    <td><a href="../../Backend/TurnosCliente/CancelarTurno.php?id=<?php echo $array['idTurno'] ?>"  class="btn btn-danger">Cancelar</a></td>

<?php
}
?>

<?php if($array["Estado"]== "En espera"){?>

    <td><a href="../../Backend/TurnosCliente/ConfirmarTurnoA.php?id=<?php echo $array['idTurno'] ?>"  class="btn btn-success">Confirmar</a></td>
    <td><a href="../../Backend/TurnosCliente/CancelarTurno.php?id=<?php echo $array['idTurno'] ?>"  class="btn btn-danger">Cancelar</a></td>

<?php
}
?>

<?php if($array["Estado"]== "Cancelado"){?>

    <td><a href="../../Backend/TurnosCliente/ConfirmarTurnoA.php?id=<?php echo $array['idTurno'] ?>"  class="btn btn-success">Confirmar</a></td>

<?php
}
?>






</tr> 


<?php

}




?>