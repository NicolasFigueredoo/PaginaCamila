
<?php
if(isset($_POST["botonEmail"])){
$nombre = $_POST["txt_nombre"];
$asunto = $_POST["txt_asunto"];
$from = $_POST["txt_hotmail"];
$hotmail = "gtytptsp@gmail.com";
$mensaje = $_POST["txt_textC"];

$headers = 'From: '.$from  . "\r\n" .
    'Reply-To: '.$hotmail. "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Return-Path:' .$hotmail. " r\n"
    ;
    
    
$mail = mail($hotmail,$asunto,$mensaje, $headers);

 if($mail){
    echo "<i syle='background-color:green;' class='fa-solid fa-circle-check'></i>";
 }
}
?>