<?php

if(!empty($_POST)){
	if(isset($_POST["nombreProducto"]) &&isset($_POST["marcaProducto"]) &&isset($_POST["valorProducto"]) &&isset($_POST["fechaRegistro"]) &&isset($_POST["tipoProducto"])){
		if($_POST["nombreProducto"]!=""&& $_POST["marcaProducto"]!=""&&$_POST["fechaRegistro"]!=""){
			include "conexion.php";
			
			$sql = "insert into producto(nombreProducto,marcaProducto,valorProducto,fechaRegistro,tipoProducto) value (\"$_POST[nombreProducto]\",\"$_POST[marcaProducto]\",\"$_POST[valorProducto]\",\"$_POST[fechaRegistro]\",\"$_POST[tipoProducto]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='productos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='productos.php';</script>";

			}
		}
	}
}



?>