<?php
include '../includes/database.php';

$Gmail = $_GET['Gmail'];
$pais = $_GET['pais'];
$cp = $_GEt['cp'];
$nom_client = $_GET['nom'];
$idusuari = $_GEt['idusuari'];
$DNI = $_GET['DNI'];

$query = "UPDATE usuari SET nom = '$nom_client', Gmail = '$Gmail', cp = '$cp', pais = '$pais' WHERE idusuari = '$idusuari' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../log_in.php');
}else{
    echo mysqli_error($dbh);
}