<!DOCTYPE html>
<html>
<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<div class="mt-3"></div>

<table class="table">
<thead>
<tr>
<th>ID</td>
<th>Dificultad</td>
<th>Ganancias</td>
</tr>
</thead>
<tbody>
<?php
  $query = "SELECT * FROM mode_de_joc";
  $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['id_mode_de_joc']."</td>
    <td>".$row['dificultat']."</td>
    <td>".$row['Ganancias']."</td>
    </tr>";
  }
  ?>
</tbody>
</table>

</html>