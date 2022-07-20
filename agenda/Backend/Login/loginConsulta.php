<?php
require("../../Backend/Conexion/conexion.php");


if (isset($_POST["boton"])) {

  session_start();
  if (strlen($_POST["txt_hotmail"]) >= 1 && strlen($_POST["txt_contraseña"]) >= 1) {




    $hotmail = mysqli_real_escape_string($conexion, trim($_POST["txt_hotmail"]));
    $contraseña = mysqli_real_escape_string($conexion, trim($_POST["txt_contraseña"]));
    $consulta = "SELECT nombre, IdUsuario FROM usuario WHERE hotmail = '$hotmail' and contraseña = '$contraseña' ";
    $resultado = mysqli_query($conexion, $consulta);


    
    

  
    if ($array = mysqli_fetch_array($resultado)) {

      $_SESSION["nombre"] = $array[0];
      $_SESSION["IdUsuario"] = $array[1];

      header("location: ../PaginaPrincipal/index.php");


    } else {
    ?>
      <h3 class="text-center" style="color: red; font-family:sans-serif; font-size:18px;">Contraseña o Email Incorrectos</h3>
<?php
    }
  }
}


?>