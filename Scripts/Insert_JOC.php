<?php
include '../includes/database.php'
?>
<?php
$nombre = $_POST['nombre'];
$token = $_POST['token'];

$query = "INSERT INTO JOC (nombre, token) VALUES('$nombre', '$token')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>
