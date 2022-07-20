<?php

require("../../Backend/Conexion/conexion.php");


if(isset($_POST["boton"])){

    if(strlen($_POST["txt_nombre"]) >= 1 && strlen($_POST["txt_telefono"]) >= 1 && strlen($_POST["txt_contraseña"]) >= 1){
        $nombre = mysqli_real_escape_string($conexion,trim($_POST["txt_nombre"]));
        $hotmail = mysqli_real_escape_string($conexion,trim($_POST["txt_hotmail"]));
        $telefono = mysqli_real_escape_string($conexion,trim($_POST["txt_telefono"]));
        $contraseña = mysqli_real_escape_string($conexion,trim($_POST["txt_contraseña"]));
        $fechareg = date("y/m/d");
        $consulta = "INSERT INTO usuario(nombre, telefono, hotmail, contraseña, fechaRegistro) VALUES (?,?,?,?,?)";
        $sentencia = mysqli_prepare($conexion,$consulta);
        mysqli_stmt_bind_param($sentencia,"sssss",$nombre,$telefono,$hotmail,$contraseña,$fechareg);

        $result = mysqli_stmt_execute($sentencia);

         if($result){
            ?>
            <div>

            <h3 class="text-center" style="color: green; font-family:sans-serif; font-size:18px;"> El registro fue Exitoso</h3>
            </div>
            <?php


}
mysqli_stmt_close($sentencia);
     }

     
}



?>