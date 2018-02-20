<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from producto where id = ".$_GET["id"];
$query = $con->query($sql1);
$producto = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $producto=$r;
  break;
}

  }
?>

<?php if($producto!=null):?>

<form role="form" method="post" action="actualizar_prod.php">
  <div class="form-group">
    <label for="nombreProducto">Nombre del Producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->nombreProducto; ?>" name="nombreProducto" required>
  </div>
  <div class="form-group">
    <label for="marcaProducto">Marca del Producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->marcaProducto; ?>" name="marcaProducto" required>
  </div>
  <div class="form-group">
    <label for="valorProducto">Valor del Producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->valorProducto; ?>" name="valorProducto" required>
  </div>
  <div class="form-group">
    <label for="fechaRegistro">Fecha del Registro</label>
    <input type="text" class="form-control" value="<?php echo $producto->fechaRegistro; ?>" name="fechaRegistro" >
  </div>
  <div class="form-group">
    <label for="tipoProducto">Tipo del Producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->tipoProducto; ?>" name="tipoProducto" >
  </div>
<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>