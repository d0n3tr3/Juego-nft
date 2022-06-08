<?php
include '../includes/database.php'
?>
<?php
$nombre = $_POST['nom'];
$token = $_POST['token'];

$query = "INSERT INTO JOC (nom, token) VALUES('$nom', '$token')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>
