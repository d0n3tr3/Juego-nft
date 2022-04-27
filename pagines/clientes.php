<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<body>
  <section>
    <header>
      <table>
        <thead>
          <tr>
            <th>Nom complet</th>
            <th>DIN</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Maria Anders</td>
            <td>47329103H</td>
            <td>MariaAnders@gmail.com</td>
          </tr>
          <tr>
            <td>Francisco Rosal</td>
            <td>84502415Y</td>
            <td>FranciscoRosal@gmail.com</td>
          </tr>
        </tbody>
      </table>
      <table>
<thead>
<tr>
<td>ID</td>
<td>NOM</td>
<td>PAIS</td>
<td>CP</td>
</tr>
</thead>
<tbody>
  <?php
  $query = "SELECT * FROM cryptomoneda";
  $result = mysqli_query($dbh, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['pais']."</td>
    <td>".$row['cp']."</td>
    </tr>";
  }
  ?>
</tbody>
</table> 
    </header>
  </section>
</body>
</html>