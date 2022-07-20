<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Estilos/Imagenes/icono.png" type="image/x-icon">

  <link rel="stylesheet" href="../../Iconos/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./paginaMundo0.1.css">



  <title>Frida Nails</title>

</head>

<body class="bg-white">
  <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" id="pagnav">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand " id="LogoFrida" href="../PaginaMundo/PaginaMundo.php">Frida Nails</a>


        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " style="color:black;" aria-current="page" href="../PaginaMundo/PaginaMundo.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:black;" href="../PaginaPrecios/PaginaPrecio.php">PRECIOS</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:black;" aria-current="page" href="../PaginaContacto/contacto.php">CONTACTO</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:black;" aria-current="page" href="../../frontend/PaginaLogin/loginPAG.php">INICIO SESION</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:black;" aria-current="page" href="../../frontend/PaginaRegistrarse/registroPAG.php">REGISTRARSE</a>

          </li>
        </ul>
      </div>

    </div>
  </nav>


  <div id="DivIMG">
    <img src="../Estilos/Imagenes/ImagenUñaPrincipal.jpg" id="ImagenUñaP">

    <p id="Textoimg">Tus uñas perfectas<br> siempre!</p>
    <a href="../PaginaRegistrarse/registroPAG.php"><button id="botonENVIO">REGISTRATE AHORA!</button></a>
  </div>

  <div class="row">
    <div class="col s12">
      <h1 class="text-center" id="textCambio">Animate Al Cambio</h1>

      <div class="carousel center-aling" id="carrusel">

      </div>
    </div>






</body>

<footer>

  <div class="contaniner_footer">

    <div class="box_footer">
      <p id="titulofooter">TELEFONO: 000-800-3242</p>

    </div>

    <div class="box_footer">
     <img id="logo" src="../Estilos/Imagenes/frida.png" alt="">

    </div>

    <div class="box_footer">
      <a href="https://www.instagram.com/_frida_nails/"><i class="icon fa-brands fa-instagram-square"></i></a>
      <a href="../PaginaContacto/contacto.php"><i class="icon fa-solid fa-square-envelope"></i></i></a>


    </div>
  </div>
</footer>


<script src="./paginaCarousel.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>