<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>

<header>
<div class="mt-3"></div>
<table class="table">
<thead>
<tr>
  <th>ID</td>
  <th>nom.usuari</td>
  <th>CP</td>
  <th>Pais</td>
  <th>DNI</td>
  <th>Gmail</td>
  <th>token</td>
  <th>nom.JOC</td>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT idusuari, nom AS nom.usuari, cp, pais, DNI, Gmail, Pasw, token, nombre AS nom.JOC FROM usuari INNER JOIN JOC";
$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idusuari']."</td>
<td>".$row['nom.usuari']."</td>
<td>".$row['cp']."</td>
<td>".$row['pais']."</td>
<td>".$row['DNI']."</td>
<td>".$row['Gmail']."</td>
<td>".$row['token']."</td>
<td>".$row['nom.JOC']."</td>
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