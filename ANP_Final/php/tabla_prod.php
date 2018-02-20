<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from producto";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre del Producto</th>
	<th>Marca del Producto</th>
	<th>Valor Producto</th>
	<th>Fecha de Registro</th>
	<th>Tipo Producto</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombreProducto"]; ?></td>
	<td><?php echo $r["marcaProducto"]; ?></td>
	<td><?php echo $r["valorProducto"]; ?></td>
	<td><?php echo $r["fechaRegistro"]; ?></td>
	<td><?php echo $r["tipoProducto"]; ?></td>
	<td style="width:150px;">
		<a href="editar_prod.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar_prod.php?id="+<?php echo $r["id"];?>;

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
