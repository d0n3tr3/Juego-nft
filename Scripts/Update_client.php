<?php
include '../includes/database.php';

$Gmail = $_GET['Gmail'];
$pais = $_GET['pais'];
$cp = $_GET['cp'];
$nom_client = $_GET['nom'];
$Pasw = $_GET['Pasw'];
$idusuari = $_GET['idusuari'];
$DNI = $_GET['DNI'];

$query = "UPDATE usuari SET nom = '$nom_client', Gmail = '$Gmail',Pasw ='$Pasw', cp = '$cp', pais = '$pais' WHERE idusuari = '$idusuari' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}
?>