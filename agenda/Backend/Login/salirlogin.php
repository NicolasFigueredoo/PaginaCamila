<?php


session_start();


session_destroy();


header("location: ../../frontend/PaginaLogin/loginPAG.php");
exit();
?>