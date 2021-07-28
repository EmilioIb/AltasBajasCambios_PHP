<?php 
@include('./include/header.php');
@include('./db.php');


$query = "SELECT * FROM frutas WHERE id=".$_GET["val"];
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);


if(!$res){
    die("La consulta fallo"); 
}

?>

<div class="container col-md-4">
    <form role="form" action="editarDatos.php" method="post">
        <div class="form-group">
        <h4>Edicion de datos</h4>
            <label>Id:</label>
            <input type="text" class="form-control" name="id" value="<?=$row["id"]?>" readonly>
            <label for="nom">Nombre:</label>
            <input type="text" class="form-control" name="nom" placeholder="Fruta" value="<?=$row["nombre"]?>">
            <label for="desc">Descripcion:</label>
            <input type="text" class="form-control" name="desc" placeholder="Descripcion" value="<?=$row["descripcion"]?>">
        </div>
        <br>
        <button type="submit" class="btn btn-dark container">Editar</button>
    </form>
</div>


<?php @include('./include/footer.php'); ?>