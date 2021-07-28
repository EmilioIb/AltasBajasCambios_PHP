<?php session_start(); ?>
<?php @include('./db.php');?>
<?php @include('./include/header.php');?>

<div class="container col-md-6">

<?php if (isset($_SESSION["log"]) == "si"): ?>
  <br>
  <h3>Usuario: <?=$_SESSION["nom"]?></h3>
  <h4>Añadir fruta</h4>
    <form role="form" action="altas.php" method="post">
        <div class="form-group">
            <label for="nom">Nombre:</label>
            <input type="text" class="form-control" name="nom" placeholder="Fruta">
            <label for="desc">Descripcion:</label>
            <input type="text" class="form-control" name="desc" placeholder="Descripcion">
        </div>
        <br>
        <button type="submit" class="btn btn-dark container">Guardar</button>
    </form>
</div>

<?php else: ?>

<br>
<h3>Ingresar</h3>
<form role="form" action="login.php" method="post">
        <div class="form-group">
            <label for="nom">Usuario:</label>
            <input type="text" class="form-control" name="usu" placeholder="Usuario">
            <label for="desc">Contraseña:</label>
            <input type="password" class="form-control" name="pasw" placeholder="Contraseña">
        </div>
        <br>
        <button type="submit" class="btn btn-dark container">Ingresar</button>

        <?php if(isset($_GET["nom"])) : ?>
        <?php if($_GET["nom"] == "no"):  ?>   
            <br> <br>
            <div class="alert alert-danger" role="alert">
                Usuario No encontrado
            </div>
        <?php endif; ?>
        <?php endif; ?>

    </form>
</div>

<?php endif; ?>




<?php @include('./include/footer.php'); ?>