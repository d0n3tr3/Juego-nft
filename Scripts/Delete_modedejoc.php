<?php
include '../includes/database.php';


$id_mode_de_joc = $_POST['id'];

$query = "DELETE FROM clients WHERE id_mode_de_joc = '$id_mode_de_joc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../mode_de_joc.php');
}else{
    echo mysqli_error($dbh);
}