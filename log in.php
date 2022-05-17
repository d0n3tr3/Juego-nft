<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
$_idusuari = null;
if(isset($get["id"])){
  $_idusuari = $_get["id"];
}
$action = "scripts/formulario_cliente.php";
if($_idusuari != null){
$action ="scripts/formulario_cliente.php";
}
?>
<body>

<section class="container">
<?php
include 'includes/header.php';
?>
<?php
    if($_idusuari == null){
      echo 'NOU CLIENT';
    }else{
      echo 'EDITA EL CLIENT';
    }
?>
    </section>

    <section>
                            
<div class="mb-4"></div>
<form action="<?=$action?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </section>
</body>

</html>