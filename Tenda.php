<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<div class="mt-3"></div>
<a class='btn btn-primary' href="edita_tenda.php?id=">Log in</a>
<table>
<table class="table"> 
<thead>
<tr>
<td>ID</td>
<td>NOMBRE</td>
<td>TOKEN</td>
</tr>
</thead>
<tbody>
<?php

$query = "SELECT * FROM Tenda";
$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idtenda']."</td>
<td>".$row['nom']."</td>
<td>".$row['token']."</td>
<td><a class='btn btn-danger' href='Scripts/Delete_JOC.php?id=" .$row['idjoc']."'>Eliminar</a></td>
<td><a class='btn btn-primary' href='edita_joc.php?id=" .$row['idjoc']."'>Editar</a></td>
</tr>";
}
?>
</tbody>
</table>
<body>

</body>
</tbody>
</table>
</html>