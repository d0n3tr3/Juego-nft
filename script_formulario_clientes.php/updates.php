<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<?php

$Gmail = $_POST['Gmail'];
$Pais = $_POST['Pais'];
$CP = $_POST['CP'];
$Nombre = $_POST['Nombre'];
$Pasword = $_POST['Pasword'];
$DNI = $_POST['DNI'];

$query = "UPDATE clientes SET Nombre = '$Nombre', Gmail = '$Gmail', Pasword = '$Pasword' CP = '$CP', Pais = '$Pais' WHERE DNI = '$DNI' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}

?>