<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from profesional";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre del Profesional</th>
	<th>Cedula del Profesional</th>
	<th>Ocupacion</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombreProfesional"]; ?></td>
	<td><?php echo $r["cedulaProfesional"]; ?></td>
	<td><?php echo $r["ocupacion"]; ?></td>
	<td style="width:150px;">
		<a href="editar_prof.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar_prof.php?id="+<?php echo $r["id"];?>;

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
