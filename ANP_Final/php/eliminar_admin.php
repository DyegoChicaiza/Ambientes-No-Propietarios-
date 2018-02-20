<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM administrativo WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='administrativo.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='administrativo.php';</script>";

			}
}

?>