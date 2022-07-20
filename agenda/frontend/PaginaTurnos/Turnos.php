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

<div class="col mt-5 shadow-sm rounded p-2 rounded p-2">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Telefono</th>
    <th scope="col">Servicio</th>
    <th scope="col">Dia</th>
    <th scope="col">Mes</th>
    <th scope="col">Hora</th>
    <th scope="col">Estado</th>
    <th scope="col"></th>


    </tr>
  </thead>
  <tbody>
  <?php
  require("../../Backend/TurnosCliente/MostrarTurnosA.php");

?>
  </tbody>
</table>
</div>

</div>
</div>
</body>
<script src="https://kit.fontawesome.com/4d804e37f1.js" crossorigin="anonymous"></script>

</html>