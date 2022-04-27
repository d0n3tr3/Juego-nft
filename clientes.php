<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<<<<<<< HEAD

<table>
  <tr>
    <th>Nom complet</th>
    <th>DNI</th>
    <th>Email</th>
  </tr>
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
</table> 
=======
>>>>>>> dani
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
    </header>
  </section>
</body>
</html>