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
<td>TOKEN</td>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM JOC";
$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idjoc']."</td>
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
</html>