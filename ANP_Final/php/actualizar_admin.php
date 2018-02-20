<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["contrasena"])){
		if($_POST["nombre"]!=""&& $_POST["contrasena"]!=""){
			include "conexion.php";
			
			$sql = "update administrativo set nombre=\"$_POST[nombre]\",contrasena=\"$_POST[contrasena]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='administrativos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='administrativos.php';</script>";

			}
		}
	}
}
?>