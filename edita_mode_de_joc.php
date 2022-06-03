<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>
<?php
$id_mode_de_joc = null;
$mode_de_joc = null;
if(isset($_GET["id"])){
  $id_mode_de_joc = $_GET["id"];
  $query = "SELECT * FROM JOC WHERE idjoc = '$id_mode_de_joc' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $mode_de_joc = mysqli_fetch_assoc($result);
}


$action = "Scripts/insert_modedejoc.php";
if($id_mode_de_joc != null){
  $action ="Scripts/Update_modedejoc.php";
}
?>
<body>
<?php
    if($id_mode_de_joc == null){
      echo 'NOU MODE';
    }else{
      echo 'EDITA EL MODE';
    }
?>
<section class="container">

</section>
<a class='btn btn-primary' href="edita_mode_de_joc.php?id=">NOU MODE</a>
<section>
                            
<div class="mb-4"></div>
<form action="<?=$action?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dificultad</label>
    <input value="<?=$mode_de_joc['dificultat'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="dificultat" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ganancias</label>
    <input value="<?=$mode_de_joc['Ganancias'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="Ganancias" class="form-text"> </div>
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