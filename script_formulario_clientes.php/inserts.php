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
$DNI = $_POST['DNI'];
$Pasword = $_POST['Pasword'];

$query = "INSERT INTO clientes (Nombre, Gmail, CP, Pais, DNI, Pasword) VALUES('$Nombre', '$Gmail', '$CP', '$Pais','$DNI', '$Pasword')";
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../clientes.php');
}else{
    echo mysqli_error($dbh);
}
?>