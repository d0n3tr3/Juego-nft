<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>
<?php
$idusuari = null;
if(isset($_get["idusuari"])){
  
  $idusuari = $_get["idusuari"];
}
$query = "SELECT * FROM usuari WHERE idusuari = '$idusuari' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $client = mysqli_fetch_assoc($result);

$action = "Scripts/insert_client.php";
if($idusuari != null){
  $action ="Scripts/insert_client.php";
}
?>
<body>
<?php
    if($idusuari == null){
      echo 'NOU CLIENT';
    }else{
      echo 'EDITA EL CLIENT';
    }
?>
<section class="container">


    </section>

    <section>
                            
<div class="mb-4"></div>
<form action="<?=$action?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="Gmail" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="Nombre" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pais</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="Pais natal" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CP</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="Codigo postal" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DNI</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="DNI" class="form-text"> </div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Pulsa para confirmar que no eres un bot</label>
  </div>
  
  <?php 
  
if($idusuari){
    echo "<input type='hidden' value='".$idusuari['id']."' name='id'>";
}
else{
    echo 'EDITA EL CLIENT';
    }
?>
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