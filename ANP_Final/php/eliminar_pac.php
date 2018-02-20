<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM paciente WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='pacientes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='pacientes.php';</script>";

			}
}

?>