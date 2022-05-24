<?php
include '../includes/database.php';

$Nombre = $_POST['nombre'];
$Token = $_POST['token'];
$idjoc = $_POST['idjoc'];

$query = "DELETE * FROM clients WHERE idjoc = '$idjoc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}