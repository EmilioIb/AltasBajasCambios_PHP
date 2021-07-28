<?php session_start(); ?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

    <?php if(isset($_SESSION["log"]) == "si"): ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Altas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="mostrar.php">Bajas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="mostrar.php">Cambios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Salir</a>
        </li>

    <?php else: ?>

        <li class="nav-item">
          <a class="nav-link active" href="index.php">Ingresar</a>
        </li>

    <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>