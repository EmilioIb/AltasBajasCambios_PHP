<?php 
include('./db.php');
$usr = $_POST["usu"];
$pas = $_POST["pasw"];

$query = "select * from usuarios where usuario = '$usr' and password = '$pas'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);
//var_dump($row["id"], $row["usuario"]);

if($row["usuario"]==""){
    header("Location: ./index.php?nom=no");
}
else{
    session_start();
    $_SESSION["log"] = "si";
    $_SESSION["id"] = $row["id"];
    $_SESSION["nom"] = $row["usuario"];

    header("Location: ./index.php?nom=".$_SESSION["nom"]);
}

?>
