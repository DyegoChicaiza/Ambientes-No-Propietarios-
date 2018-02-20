<?php
include "conexion.php";

$user_id=null;
$sql4= "select * from profesional where id = ".$_GET["id"];
$query = $con->query($sql4);
$profesional = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $profesional=$r;
  break;
}

  }
?>

<?php if($profesional!=null):?>

<form role="form" method="post" action="actualizar_prof.php">
  <div class="form-group">
    <label for="nombreProfesional">Nombre del Profesional</label>
    <input type="text" class="form-control" value="<?php echo $profesional->nombreProfesional; ?>" name="nombreProfesional" required>
  </div>
  <div class="form-group">
    <label for="cedulaProfesional">Cedula Profesional</label>
    <input type="text" class="form-control" value="<?php echo $profesional->cedulaProfesional; ?>" name="cedulaProfesional" required>
  </div>
  <div class="form-group">
    <label for="ocupacion">Ocupacion</label>
    <input type="text" class="form-control" value="<?php echo $profesional->ocupacion; ?>" name="ocupacion" required>
  </div>
<input type="hidden" name="id" value="<?php echo $profesional->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>