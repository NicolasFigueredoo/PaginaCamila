<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Estilos/Imagenes/icono.png" type="image/x-icon">
  <link rel="stylesheet" href="./agendarc.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../Iconos/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Frida Nails</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg  sticky-top shadow-sm" id="pagnav">
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


  <div class="d-flex justify-content-between">

    <div>


    </div>


    <form method="POST">
      <input type="password" class="form" id="txt_admin" name="txt_admin" placeholder="" required>
      <button id="botonadmin" type="submit" name="botonAdmin" class="btn-primary  text-uppercase fw-bold">ok</button>
    </form>

  </div>
  <?php
  require("../../Backend/Agendar/admin.php");

  ?>
  <div class="container">
    <div class="row">

      <div id="form2" class="col  shadow rounded p-2 ">
        <div id="titulo" class="d-flex justify-content-center">
          <h2 class="w-100 text-center mb-4">PEDIR TURNO<?php
                                                        require("../../Backend/TurnosCliente/InsertarTurno.php");

                                                        ?></h2>


        </div>

        <hr style="color: #9999" />

        <form id="formulario" method="POST">

          <div class="mb-2">
            <label for="txt_servicio" class="form-label">SERVICIO</label>
            <input type="text" class="form-control" id="txt_servicio" name="txt_servicio" placeholder="Ingrese el servicio que necesita" required="">
          </div>

          <div class="mb-2">
            <label for="txt_horaTurno" class="form-label">HORA</label>
            <input type="text" class="form-control" id="txt_horaTurno" name="txt_horaTurno" placeholder="Ingrese la hora" required="">
          </div>

          <div class="mb-2">
            <label for="txt_diaTurno" class="form-label">DIA</label>
            <input type="text" class="form-control" id="txt_diaTurno" name="txt_diaTurno" placeholder="Ingrese el dia" required="">
          </div>

          <div class="mb-2">
            <label for="txt_mesTurno" class="form-label">MES</label>
            <input type="text" class="form-control" id="txt_mesTurno" name="txt_mesTurno" placeholder="Ingrese el mes" required="">
          </div>

          <div class="mb-2">
            <label for="txt_telefonoTurno" class="form-label">TELEFONO</label>
            <input type="text" class="form-control" id="txt_telefonoTurno" name="txt_telefonoTurno" placeholder="Ingrese su telefono" required="">
          </div>

          <button type="submit" id="botonturno" name="botonTurno" class="btn w-100 text-uppercase fw-bold">Pedir Turno</button>



        </form>
      </div>

      <div class="col mt-5 shadow-sm rounded p-2 rounded p-2">
        <table class="table">
          <thead>
            <h1>Turnos Disponibles</h1>
            <tr class="table-danger">
              <th scope="col">FECHA</th>
              <th scope="col">DIA</th>
              <th scope="col">MES</th>
              <th scope="col">DESDE</th>
              <th scope="col">HASTA</th>
              <th scope="col">ESTADO</th>
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
            <?php
            require("../../Backend/Agendar/agendaMostrarCliente.php");
            ?>
          </tbody>
        </table>
      </div>

    </div>


  </div>
</body>

</html>