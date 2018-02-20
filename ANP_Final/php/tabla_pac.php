<?php

include "conexion.php";

$user_id=null;
$sql2= "select * from paciente";
$query = $con->query($sql2);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre del Paciente</th>
	<th>Fecha de Nacimiento</th>
	<th>Especie</th>
	<th>Sexo</th>
	<th>Raza</th>
	<th>Nombre del Dueño</th>
	<th>Telefono del Dueño</th>
	<th>Dirección</th>
	<th>Correo</th>
	<th>Fecha de Registro</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombrePaciente"]; ?></td>
	<td><?php echo $r["fechaNacimiento"]; ?></td>
	<td><?php echo $r["especie"]; ?></td>
	<td><?php echo $r["sexo"]; ?></td>
	<td><?php echo $r["raza"]; ?></td>
	<td><?php echo $r["nombreDueno"]; ?></td>
	<td><?php echo $r["telefonoDueno"]; ?></td>
	<td><?php echo $r["direccionDueno"]; ?></td>
	<td><?php echo $r["correoDueno"]; ?></td>
	<td><?php echo $r["fechaRegistro"]; ?></td>
	<td style="width:150px;">
		<a href="editar_pac.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar_pac.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
