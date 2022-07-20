

<?php
require("../../Backend/Conexion/conexion.php");
$consulta = "SELECT * FROM agenda";
$resultado = mysqli_query($conexion,$consulta);


while($array = mysqli_fetch_assoc($resultado)){

    ?>

<tr>
<th scope="row"><?php echo $array["codigoAgenda"];?></th>
<td><?php echo $array["Numero"];?></td>
<td><?php echo $array["dia"];?></td>
<td><?php echo $array["mes"];?></td>
<td><?php echo $array["hasta"];?></td>
<td><?php echo $array["desde"];?></td>
<td><?php echo $array["Estado"];?></td>
<td><?php echo $array["IdCliente"];?></td>



</tr> 

<?php

}




?>