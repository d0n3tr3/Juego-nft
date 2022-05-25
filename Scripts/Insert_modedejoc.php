<?php
include '../includes/database.php'
?>
<?php
<<<<<<< HEAD
$Dificultat=$_POST['dificultat'];
=======
$Dificultat = $_POST['dificultat'];
>>>>>>> Fernado
$Ganancias = $_POST['Ganancias'];


$query = "INSERT INTO mode_de_joc (dificultat, Gananacias) VALUES('$Dificultat', '$Ganancias')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../mode_de_joc.php');
}else{
    echo mysqli_error($dbh);
}
?>