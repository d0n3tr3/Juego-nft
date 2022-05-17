<?php
include '../includes/database.php'


$Gmail = $_POST['Gmail'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom = $_POST['nom'];
$DNI = $_POST['DNI'];

$query = "INSERT INTO clients (nom, Gmail, cp, pais, DNI) VALUES('$nom', '$Gmail', '$cp', '$pais', '$DNI')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}