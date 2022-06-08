<?php
include '../includes/database.php'
?>

<?php
$Gmail = $_POST['Gmail'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$Pasw = $_POST['Pasw'];
$nom = $_POST['nom'];
$DNI = $_POST['DNI'];

$query = "INSERT INTO usuari (nom, Gmail, cp, pais, Pasw, DNI) VALUES ('$nom', '$Gmail', '$cp', '$pais', '$Pasw', '$DNI')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}
?>