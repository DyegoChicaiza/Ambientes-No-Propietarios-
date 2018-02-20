<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["contrasena"])){
		if($_POST["nombre"]!=""&& $_POST["contrasena"]!=""){
			include "conexion.php";
			
			$sql = "insert into administrativo(nombre,contrasena) value (\"$_POST[nombre]\",\"$_POST[contrasena]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='administrativos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='administrativos.php';</script>";

			}
		}
	}
}
?>