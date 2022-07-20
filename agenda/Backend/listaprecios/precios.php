<?php
require("../../Backend/Conexion/conexion.php");

$consulta = "SELECT * FROM precios";
$resultado = mysqli_query($conexion,$consulta);



while($array = mysqli_fetch_array($resultado)){
?>

<div class="col-4">

<div class="card" style="width: 18rem; height: 300px;">
  <div class="card-body">
    <h5 id="titulo" class="card-title "><?php echo $array["servicio"] ?></h5>
    <p class="card-text"><?php echo $array["Informacion"] ?></p>
    <p id="tiempo" class="card-text"><?php echo $array["Tiempo"] ?></p>
    <p id="duracion" class="card-text"><?php echo $array["Duracion"] ?></p>
  </div>
  <p id="valor" class="card-text"><?php echo $array["Valor"] ?>$</p>
</div>

</div>
    


<?php } 
?>


