<?php
include "conexion.php";

$user_id=null;
$sql2= "select * from paciente where id = ".$_GET["id"];
$query = $con->query($sql2);
$paciente = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $paciente=$r;
  break;
}

  }
?>

<?php if($paciente!=null):?>

<form role="form" method="post" action="actualizar_pac.php" class="form-horizontal" >
  <div class="form-group">
    <label for="nombrePaciente">Nombre del Paciente</label>
    <input type="text" class="form-control" value="<?php echo $paciente->nombrePaciente; ?>" name="nombrePaciente" required>
  </div>
  <div class="form-group">
    <label for="fechaNacimiento">Fecha de Nacimiento</label>
    <input type="text" class="form-control" value="<?php echo $paciente->fechaNacimiento; ?>" name="fechaNacimiento" required>
  </div>
  <div class="form-group">
    <label for="especie">Especie</label>
    <input type="text" class="form-control" value="<?php echo $paciente->especie; ?>" name="especie" required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <input type="text" class="form-control" value="<?php echo $paciente->sexo; ?>" name="sexo" >
  </div>
  <div class="form-group">
    <label for="raza">Raza</label>
    <input type="text" class="form-control" value="<?php echo $paciente->raza; ?>" name="raza" >
  </div>
  <div class="form-group">
    <label for="nombreDueno">Nombre del Dueño</label>
    <input type="text" class="form-control" value="<?php echo $paciente->nombreDueno; ?>" name="nombreDueno" >
  </div>
  <div class="form-group">
    <label for="telefonoDueno">Telefono del Dueño</label>
    <input type="text" class="form-control" value="<?php echo $paciente->telefonoDueno; ?>" name="telefonoDueno" >
  </div>
  <div class="form-group">
    <label for="direccionDueno">Dirección del Dueño</label>
    <input type="text" class="form-control" value="<?php echo $paciente->direccionDueno; ?>" name="direccionDueno" >
  </div>
  <div class="form-group">
    <label for="correoDueno">Correo Dueño</label>
    <input type="text" class="form-control" value="<?php echo $paciente->correoDueno; ?>" name="correoDueno" >
  </div>
  <div class="form-group">
    <label for="fechaRegistro">Fecha de Registro</label>
    <input type="date" class="form-control" value="<?php echo $paciente->fechaRegistro; ?>" name="fechaRegistro" >
  </div>


<input type="hidden" name="id" value="<?php echo $paciente->id; ?>">
  <Center><button type="submit" class="btn btn-default">Actualizar</button></Center>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>