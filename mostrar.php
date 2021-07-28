<?php 

@include('./include/header.php');
@include('./db.php');
$id = $_SESSION['id'];

//Consulta antigua
//$query = "Select * from frutas";
$query = "SELECT * FROM frutas INNER JOIN frutasDetalle"
        ." on frutasDetalle.idFrutas = frutas.id where frutasDetalle.idUsuario = $id";

$res = mysqli_query($con, $query);

if(!$res){
    die("Consulta fallida");
}

?>

<div class="container col-md-6">
<h1>Mostrar Frutas</h1>

<?php if(isset($_GET["var"]) == "si"): ?>

    <div class="alert alert-primary" role="alert">
    Elemento eliminado correctamente
    </div>

<?php else:?>

<?php endif;?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>      

        <?php
            
            foreach($res as $key => $fruta){
                echo "<tr>"
                ."<td width='30%'>".$fruta["nombre"]."</td>"
                ."<td width='40%'>".$fruta["descripcion"]."</td>"
                ."<td width='15%'><a href='./editar.php?val=$fruta[idFrutas]' class='btn btn-warning'>Editar</a></td>"
                ."<td width='15%'><a href='./eliminar.php?val=$fruta[idFrutas]' class='btn btn-danger'>Eliminar</a></td>"
                ."</tr>";
            }
        ?>     
        </tbody>
    </table>

<?php if(isset($_GET["res"])) : ?>
    <?php if($_GET["res"]=="si") : ?>
        <br><br>
        <div class="alert alert-info" role="alert">
            Se actualizo un elemento
        </div>
    <?php elseif($_GET["res"]=="no") : ?>
        <br><br>
        <div class="alert alert-warning" role="alert">
            No se actualizo nada
        </div>
    <?php elseif($_GET["res"]=="eli") :?>
        <br><br>
        <div class="alert alert-danger" role="alert">
            Se elimino una fruta
        </div>
    <?php endif?>
<?php endif?>
        

</div>



<?php @include('./include/footer.php'); ?>