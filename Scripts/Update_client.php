<?php
include '../includes/database.php';

$Gmail = $_POST['Gmail'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$id = $_POST['id'];
$DNI = $_POST['DNI'];

$query = "UPDATE clients SET nom = '$nom', Gmail = '$Gmail', cp = '$cp', pais = '$pais' WHERE id = '$id' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}