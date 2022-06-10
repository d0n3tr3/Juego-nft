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
<a class='btn btn-primary' href="log_in.php?id=">Log in</a>
<table class="table">
<thead>
<tr>
  <th>ID</td>
  <th>Nom</td>
  <th>CP</td>
  <th>Pais</td>
  <th>DNI</td>
  <th>Gmail</td>
  <th>Pasw</td>
  <th>token</td>
  <th>NomJoc</td>
</tr>
</thead>
<tbody>
<?php
  $query = "SELECT idusuari, nom, cp, pais, DNI, Gmail, Pasw, token, nombre FROM usuari INNER JOIN JOC";
  $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['idusuari']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['cp']."</td>
    <td>".$row['pais']."</td>
    <td>".$row['DNI']."</td>
    <td>".$row['Gmail']."</td>
    <td>".$row['Pasw']."</td>
    <td>".$row['token']."</td>
    <td>".$row['nombre']."</td>
    <td><a class='btn btn-danger' href='Scripts/Delete_client.php?id=" .$row['idusuari']."'>Eliminar</a></td>
    <td><a class='btn btn-primary' href='log_in.php?id=" .$row['idusuari']."'>Editar</a></td>

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