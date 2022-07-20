<?php
require("../../Backend/Conexion/conexion.php");

$consulta = "SELECT * FROM agenda";
$resultado = mysqli_query($conexion,$consulta);



while($array = mysqli_fetch_assoc($resultado)){

    ?>

<tr>
<td ><?php echo $array["Numero"];?></td>
<td><?php echo $array["dia"];?></td>
<td><?php echo $array["mes"];?></td>
<td><?php echo $array["hasta"];?></td>
<td><?php echo $array["desde"];?></td>
<td><?php echo $array["Estado"];?></td>
<?php if( $array["Estado"] == "Libre"){?>

    <td><a style="background-color: #f8d7da; color:black;" href="../../Backend/TurnosCliente/ConfirmarTurno.php?id=<?php echo $array['codigoAgenda'] ?>"  class="btn btn-success">Reservar</a></td>
     
</tr> 
     
    <?php
}?>

<?php

}




?>