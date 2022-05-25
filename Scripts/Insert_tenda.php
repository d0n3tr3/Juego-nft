<?php
include '../includes/database.php'
?>

<?php
$Nom_tenda = $_POST['nom'];
$Token_tenda = $_POST['token'];


$query = "INSERT INTO Tenda (nom, token) VALUES('$Nom_tenda', '$Token_tenda')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../mode_de_joc.php');
}else{
    echo mysqli_error($dbh);
}
?>