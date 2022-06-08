<?php
include '../includes/database.php';

$nom = $_POST['nom'];
$idtenda = $_POST['idtenda'];
$Token = $_POST['token'];

$query = "UPDATE Tenda SET nom = '$nom', token = '$Token' WHERE idtenda = '$idtenda' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Tenda.php');
}else{
    echo mysqli_error($dbh);
}