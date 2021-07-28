<?php @include('./include/header.php');?>

<?php @include('./db.php');

$nom = $_POST["nom"];
$des = $_POST["desc"];
$query = "Insert into frutas(nombre, descripcion) values ('$nom', '$des')";
$res = mysqli_query($con, $query);

$frutas = mysqli_insert_id($con); //Recupera el ultimo ID guardado
$id = $_SESSION["id"];
$query2 = "INSERT INTO frutasDetalle(idfrutas, idusuario) VALUES ('$frutas','$id')";
$res2 = mysqli_query($con, $query2);
$nom = $row["usuario"];

if(!$res && !$res2){
    die("Consulta fallida");
}
else{
    header("Location: ./mostrar.php");
}
?>

<?php @include('./include/footer.php'); ?>