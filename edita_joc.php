<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>
<?php
$idjoc = null;
$JOC = null;
if(isset($_GET["id"])){
  $idjoc = $_GET["id"];
  $query = "SELECT * FROM JOC WHERE idjoc = '$idjoc' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $JOC = mysqli_fetch_assoc($result);
}


$action = "Scripts/Insert_JOC.php";
if($idjoc != null){
  $action ="Scripts/Update_JOC.php";
}
?>
<body>
<?php
    if($idjoc == null){
      echo 'NOU JOC';
    }else{
      echo 'EDITA EL JOC';
    }
?>
<section class="container">

</section>
<a class='btn btn-primary' href="edita_joc.php?id=">Log in</a>
<section>
                            
<div class="mb-4"></div>
<form action="<?=$action?>" method="POST">
    <input type="hidden" name="idjoc" value="<?=$JOC['idjoc']?>"/> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input name="nombre" value="<?=$JOC['nombre'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp"  class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Token</label>
    <input name="token" value="<?=$JOC['token'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp"  class="form-text"> </div>
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