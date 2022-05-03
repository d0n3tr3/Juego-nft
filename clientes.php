<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<table>
<thead>
<tr>
<td>ID</td>
<td>NOM</td>
<td>PAIS</td>
<td>CP</td>
<td>DNI</td>
<td>Gmail</td>
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
</html>