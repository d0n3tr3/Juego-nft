<?php
include '../includes/database.php'
?>

<?php
$Nombre = $_POST['nombre'];
$Token = $_POST['token'];


$query = "INSERT INTO JOC (nombre, token) VALUES('$Nombre', '$Token')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../JOC.php');
}else{
    echo mysqli_error($dbh);
}
?>