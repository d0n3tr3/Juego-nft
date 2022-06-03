<?php
include '../includes/database.php';

$nom_tenda = $_GET['nom'];
$idtenda = $_GET['idtenda'];
$Token = $_GET['token'];

$query = "UPDATE tenda SET nom = '$nom_tenda', token = '$Token' WHERE idtendda = '$idtenda' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Tenda.php');
}else{
    echo mysqli_error($dbh);
}