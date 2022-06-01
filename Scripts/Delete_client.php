<?php
include '../includes/database.php';

$idusuari = $_GET['id'];

$query="DELETE FROM usuari WHERE idusuari='$idusuari'";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}
?>