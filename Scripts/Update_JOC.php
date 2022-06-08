<?php
include '../includes/database.php';

$nombre = $_POST['nombre'];
$token = $_POST['token'];
$idjoc = $_POST['idjoc'];

$query = "UPDATE JOC SET nombre = '$nombre', token = '$token' WHERE idjoc= '$idjoc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>