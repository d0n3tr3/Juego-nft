<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>

<?php
$idtenda = null;
$Tenda = null;
if(isset($_GET["id"])){
  $idtenda = $_GET["id"];
  $query = "SELECT * FROM Tenda WHERE idtenda = '$tenda' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Tenda = mysqli_fetch_assoc($result);
}


$action = "Scripts/insert_tenda.php";
if($idtenda != null){
  $action ="Scripts/Update_JOC.php";
}
?>
<body>

<?php
    if($idjoc == null){
      echo 'NOU OBJECTE';
    }else{
      echo 'EDITA EL OBJECTE';
    }
?>
<section class="container">

</section>
<a class='btn btn-primary' href="edita_joc.php?id=">Log in</a>
<section>
                            
<div class="mb-4"></div>
<form action="<?=$action?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input value="<?=$Tenda['nombre'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="nombre" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Token</label>
    <input value="<?=$Tenda['token'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="token" class="form-text"> </div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Pulsa para confirmar que no eres un bot</label>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

                    </tbody>
                    </thead>
                </table>
            </selection>
        </section>
    </header>
</body>

</html>