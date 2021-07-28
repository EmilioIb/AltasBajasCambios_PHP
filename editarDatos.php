<?php 
@include('./db.php');

$id = $_POST['id'];
$nom = $_POST['nom'];
$desc = $_POST['desc'];

$query = "UPDATE frutas SET nombre = '$nom', descripcion = '$desc' WHERE id='$id'";
$res = mysqli_query($con, $query);
$edi = mysqli_affected_rows($con);


if($edi){
    header("Location: ./mostrar.php?res=si");
}
else{
    header("Location: ./mostrar.php?res=no");
}

?>