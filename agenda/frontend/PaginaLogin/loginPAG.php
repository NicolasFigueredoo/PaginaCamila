<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Estilos/Imagenes/icono.png" type="image/x-icon">

  <title>Frida Nails</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./login0.1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="height: 100vh">

  <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" id="pagnav">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand " id="LogoFrida" href="../PaginaMundo/PaginaMundo.php">Frida Nails</a>


        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " style="color:black;" aria-current="page" href="../../frontend/PaginaMundo/PaginaMundo.php">INICIO</a>
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


  <div id="login" class="container rounded shadow mt-5 p-4 col-xl-4 col-lg-6">

    <h2 class="w-100 text-center mb-4">INICIAR SESION</h2>

    <hr style="color: #9999" />

    <form id="formulario" method="POST">

      <div class="mb-3">
        <label for="txt_hotmail" class=" form-label">Hotmail</label>
        <input type="text" class="form-control" id="txt_hotmail" name="txt_hotmail" placeholder="Ingrese un hotmail" required="">
      </div>

      <div class="mb-3">
        <label for="txt_contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="txt_contraseña" name="txt_contraseña" placeholder="Ingrese una contraseña" required="">
      </div>

      <button type="submit" id="botonlogin" name="boton" class="btn btn-primary w-100  text-uppercase fw-bold">Entrar</button>
      <a id="registrologin" href="../PaginaRegistrarse/registroPAG.php">REGISTRARSE</a>
      <?php
      require("../../Backend/Login/loginConsulta.php");
      ?>
    </form>

  </div>


</body>

</html>