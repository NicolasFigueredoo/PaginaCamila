<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Estilos/Imagenes/icono.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../Iconos/css/all.min.css">
  <link rel="stylesheet" href="./turnosc.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <a class="nav-link " style="color:black;" aria-current="page" href="../../frontend/PaginaPrincipal/index.php">INICIO</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:black;" aria-current="page" href="../PaginaAgendar/agendarc.php">AGENDA</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:black;" aria-current="page" href="../PaginaTurnos/TurnosC.php">TURNOS</a>

          </li>
          <li class="nav-item ">
            <?php

            require("../../Backend/Login/bienvenido.php");
            ?>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="col mt-5 shadow-sm rounded p-2 rounded p-2">
    <table class="table">
      <thead>
        <tr class="table-danger">
          <th scope="col">Servicio</th>
          <th scope="col">Dia</th>
          <th scope="col">Mes</th>
          <th scope="col">Hora</th>
          <th scope="col">Estado</th>


        </tr>
      </thead>
      <tbody>
        <?php
        require("../../Backend/TurnosCliente/MostrarTurnoc.php");
        ?>
      </tbody>
    </table>
  </div>

  </div>
  </div>
</body>
<script src="https://kit.fontawesome.com/4d804e37f1.js" crossorigin="anonymous"></script>

</html>