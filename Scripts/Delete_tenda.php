<?php
include '../includes/database.php';

$idtenda = $_GET['id'];

$query = "DELETE FROM Tenda WHERE idtenda='$idtenda' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Tenda.php');
}else{
    echo mysqli_error($dbh);
}