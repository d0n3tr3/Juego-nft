<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<<<<<<< HEAD

<table>
=======
<header>
<table class="table">
>>>>>>> dani
<thead>
<tr>
  <th>ID</td>
  <th>Nombre</td>
  <th>PAIS</td>
  <th>CP</td>
  <th>DNI</td>
  <th>Gmail</td>
</tr>
</thead>
<tbody>
  <?php
  $query = "SELECT * FROM usuari";
  $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['idusuari']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['cp']."</td>
    <td>".$row['pais']."</td>
    <td>".$row['DNI']."</td>
    <td>".$row['Gmail']."</td>
    </tr>";
  }
  ?>
</tbody>
</table> 
<header>
</header>
</body>
</header>
</html>