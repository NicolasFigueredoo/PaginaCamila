<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Iconos/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Frida Nails</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand " style="color:white;" >Servidor</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="color:white;" aria-current="page" href="../PaginaAgendar/agendar.php">Agendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white;" href="../PaginaTurnos/Turnos.php">Turnos</a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex justify-content-between">

<div>

</div>
<form method="POST">
        <button type="submit" name="botonAdminVuelta" class="btn-primary  text-uppercase fw-bold">Salir</button>
        <?php
        require("../../Backend/Agendar/adminA.php");
        ?>
</form>

</div>


<div class="container" >
  <div class="row">

  <div  class="col bg-white shadow rounded p-2 ">
 <div class="d-flex justify-content-center"> 
    <h2 class="w-100 text-center mb-4">Agendar Turnos<?php require("../../Backend/Agendar/agendarConsulta.php"); ?>  
</h2>

    


 </div>

    <hr style="color: #9999" />

<form id="formulario" method="POST">

    <div class="mb-2">
        <label for="txt_numero" class="form-label">Fecha</label>
        <input type="text" class="form-control" id="txt_numero" name="txt_numero" placeholder="Ingrese el dia en numero" required="">
      </div>

      <div class="mb-2">
        <label for="txt_dia" class="form-label">Dia</label>
        <input type="text" class="form-control" id="txt_dia" name="txt_dia" placeholder="Ingrese un dia" required="">
      </div>

      <div class="mb-2">
        <label for="txt_mes" class="form-label">Mes</label>
        <input type="text" class="form-control" id="txt_mes" name="txt_mes" placeholder="Ingrese un mes" required="">
      </div>

      <div class="mb-2">
        <label for="txt_HoraInicio" class="form-label">Desde las</label>
        <input type="text" class="form-control" id="txt_HoraInicio" name="txt_HoraInicio" placeholder="Ingrese hora de inicio" required="">
      </div>

      <div class="mb-2">
        <label for="txt_HoraFin" class="form-label">Hasta las</label>
        <input type="text" class="form-control" id="txt_HoraFin" name="txt_HoraFin" placeholder="Ingrese hora de finalizacion" required="">
      </div>

      <button type="submit" name="botonAgendar" class="btn btn-primary w-100 text-uppercase fw-bold">Agendar</button>



    </form>
</div>

<div class="col mt-5 shadow-sm rounded p-2 rounded p-2">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">N°</th>
      <th scope="col">Dia</th>
      <th scope="col">Mes</th>
      <th scope="col">Desde</th>
      <th scope="col">Hasta</th>
      <th scope="col">Estado</th>
      <th scope="col">Cliente</th>


    </tr>
  </thead>
  <tbody>
  <?php
  require("../../Backend/Agendar/agendaMostrar.php");
  ?>
  </tbody>
</table>
</div>

</div>

<div class="col mt-5 shadow-sm rounded p-2 rounded p-2">
<table class="table">
  <thead>
    <h1>Clientes</h1>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Hotmail</th>
    </tr>
  </thead>
  <tbody>
  <?php
  require("../../Backend/Agendar/MostrarClientes.php");
  ?>
  </tbody>
</table>
</div>
</div>
</body>
<script src="https://kit.fontawesome.com/4d804e37f1.js" crossorigin="anonymous"></script>

</html>