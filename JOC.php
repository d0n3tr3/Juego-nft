<!DOCTYPE html>
<html>
<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>

Estos son los diferentes tipos de juegos que ofrecemos con sus respectivos tokens.


<table border="1">
<thead>
<caption>Información de los juegos<caption>
<tr>
<th>ID</td>
<th>Nombre</td>
<th>Token</td>
</tr>
</thead>
<tbody>
<?php
  $query = "SELECT * FROM JOC";
  $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['idjoc']."</td>
    <td>".$row['token']."</td>
    <td>".$row['nombre']."</td>
    </tr>";
  }
  ?>
</tbody>
</table>

</html>