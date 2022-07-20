<?php

if(isset($_POST["botonAdmin"])){
   $texto = $_POST["txt_admin"];

   if($texto == "camilabd321"){
    header("location: ../../frontend/PaginaAgendar/agendar.php");
   }
}













?>