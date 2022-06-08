<?php
include '../includes/database.php';

$nombre = $_POST['nom'];
$token = $_POST['token'];
$idjoc = $_POST['idjoc'];

$query = "DELETE * FROM JOC WHERE idjoc = '$idjoc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>