<!DOCTYPE html>
<html>
<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>

<div class="mt-3"></div>
Estos son los diferentes tipos de juegos que ofrecemos con sus respectivos tokens.
<div class="mt-3"></div>
<a class='btn btn-primary' href="edita_joc.php?id=">Log in</a>
<body>
<table class="table">
<thead>
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
    <td>".$row['nombre']."</td>
    <td>".$row['token']."</td>
    <td><a class='btn btn-danger' href='Scripts/Delete_JOC.php?id=" .$row['idjoc']."'>Eliminar</a></td>
    <td><a class='btn btn-primary' href='edita_joc.php?id=" .$row['idjoc']."'>Editar</a></td>
    </tr>";
  }
  ?>
</tbody>
</table>
</body>
</html>