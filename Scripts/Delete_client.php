<?php
include '../includes/database.php';

$Gmail = $_POST['Gmail'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom_client = $_POST['nom'];
$idusuari = $_POST['idusuari'];
$DNI = $_POST['DNI'];

$query = "DELETE * FROM clients WHERE idusuari = '$idusuari' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}