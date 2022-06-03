<?php
include '../includes/database.php';

$Nom_tenda = $_GET['nom'];
$Token = $_GET['token'];
$idtenda = $_GET['idtenda'];

$query = "DELETE * FROM tenda WHERE idtenda = '$idtenda' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Tenda.php');
}else{
    echo mysqli_error($dbh);
}