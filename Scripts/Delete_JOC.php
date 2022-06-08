<?php
include '../includes/database.php';


$idjoc = $_POST['id'];

$query = "DELETE  FROM JOC WHERE idjoc = '$idjoc' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>