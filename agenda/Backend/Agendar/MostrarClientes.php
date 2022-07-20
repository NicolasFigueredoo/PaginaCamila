
<?php
require("../../Backend/Conexion/conexion.php");
$consulta = "SELECT IdUsuario,nombre,telefono,hotmail FROM usuario";
$resultado = mysqli_query($conexion,$consulta);


while($array = mysqli_fetch_assoc($resultado)){

    ?>

<tr>
<th scope="row"><?php echo $array["IdUsuario"];?></th>
<td><?php echo $array["nombre"];?></td>
<td><?php echo $array["telefono"];?></td>
<td><?php echo $array["hotmail"];?></td>



</tr> 

<?php

}