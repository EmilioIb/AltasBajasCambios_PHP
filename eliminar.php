<?php 
@include('./db.php');

$id = $_GET["val"];
$query = "DELETE FROM frutas WHERE id='$id'";
$res = mysqli_query($con, $query);

if(!$res){
    die("No se pudo eliminar");
}
else{
    header("Location: ./mostrar.php?res=eli");
}

?>