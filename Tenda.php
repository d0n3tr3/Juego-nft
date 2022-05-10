<!DOCTYPE html>
<html>
<<<<<<< HEAD

=======
>>>>>>> dani
<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>

<<<<<<< HEAD
<table>
<thead>
<tr>
<td>ID</td>
<td>NOM</td>
<td>TOKEN</td>
=======
<div class="mt-3"></div>
<table class="table">
<thead>
<tr>
<th>ID</td>
<th>Nom</td>
<th>Token</td>
>>>>>>> dani
</tr>
</thead>
<tbody>
<?php
<<<<<<< HEAD
$query = "SELECT * FROM Tenda";
$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idtenda']."</td>
<td>".$row['nom']."</td>
<td>".$row['token']."</td>
</tr>";
}
?>
</tbody>
</table>
<body>
    <header>
    </header>
</body>
=======
  $query = "SELECT * FROM Tenda";
  $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['idtenda']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['token']."</td>
    </tr>";
  }
  ?>
</tbody>
</table>

>>>>>>> dani
</html>