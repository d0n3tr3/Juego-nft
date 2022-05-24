<?php
include '../includes/database.php';

$Dificultat = $_POST['dificultat'];
$Ganancias = $_POST['Ganancias'];
$id_mode_de_joc = $_POST['id_mode_de_joc'];

$query = "DELETE * FROM clients WHERE id_mode_de_joc = '$id_mode_de_joc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../mode_de_joc.php');
}else{
    echo mysqli_error($dbh);
}