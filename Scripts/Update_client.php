<?php
include '../includes/database.php';

$Gmail = $_POST['Gmail'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$nom= $_POST['nom'];
$Pasw = $_POST['Pasw'];
$idusuari = $_POST['idusuari'];
$DNI = $_POST['DNI'];

$query = "UPDATE usuari SET nom = '$nom', Gmail = '$Gmail',Pasw ='$Pasw', cp = '$cp', pais = '$pais' WHERE idusuari = '$idusuari' ";

$result = mysqli_query($dbh, $query);

if($result){
   header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}
?>