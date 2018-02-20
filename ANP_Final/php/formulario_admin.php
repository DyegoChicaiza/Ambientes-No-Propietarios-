<?php
include "conexion.php";

$user_id=null;
$sql3= "select * from administrativo where id = ".$_GET["id"];
$query = $con->query($sql3);
$administrativo = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $administrativo=$r;
  break;
}

  }
?>

<?php if($administrativo!=null):?>

<form role="form" method="post" action="actualizar_admin.php">
  <div class="form-group">
    <label for="nombre">Nombre del Administrativo</label>
    <input type="text" class="form-control" value="<?php echo $administrativo->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="contrasena">Contraseña del Administrativo</label>
    <input type="text" class="form-control" value="<?php echo $administrativo->contrasena; ?>" name="contrasena" required>
  </div>
<input type="hidden" name="id" value="<?php echo $administrativo->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>