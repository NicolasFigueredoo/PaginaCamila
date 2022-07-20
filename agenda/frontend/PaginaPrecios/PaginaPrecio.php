<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../../Iconos/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../frontend/PaginaPrecios/paginaprecio0.5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Frida Nails</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" id="pagnav">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand " id="LogoFrida">Frida Nails</a>


        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " style="color:black;" aria-current="page" href="../PaginaMundo/PaginaMundo.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:black;" href="./PaginaPrecio.php">PRECIOS</a>
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
  <div id="servicios" class="row pt-5">

    <?php
    require("../../Backend/listaprecios/precios.php");
    ?>

  </div>


</body>
<footer>

  <div class="contaniner_footer">

    <div class="box_footer">
      <p>telefono</p>
      <p>000-800-3242</p>

    </div>

    <div class="box_footer">
      <p>mensaje</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas nostrum hic officia odio provident, <br> odit est libero possimus id, voluptatibus, earum iusto omnis fugit. Numquam, blanditiis? Magnam excepturi veniam accusamus!</p>

    </div>

    <div class="box_footer">
      <p>Redes</p>
      <a href=""><i class="icon fa-brands fa-instagram-square"></i></a>
      <a href=""><i class="icon fa-brands fa-whatsapp-square"></i></a>
      <a href=""><i class="icon fa-solid fa-square-envelope"></i></i></a>


    </div>
  </div>
</footer>

</html>