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
<td>DIFICULTAT</td>
<td>GANANCIES</td>
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
<td>".$row['ganancies']."</td>
</tr>";
}
?>
</tbody>
</table>
<body>
    <header>
    </header>
</body>
</html>