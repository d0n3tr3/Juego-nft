<?php
include '../includes/database.php';

$nom = $_POST['nom'];
$token = $_POST['token'];
$idjoc = $_POST['idjoc'];

$query = "UPDATE JOC SET nom = '$nom', token = '$token' WHERE idjoc= '$idjoc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>