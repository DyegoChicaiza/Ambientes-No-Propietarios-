<?php

if(!empty($_POST)){
	if(isset($_POST["nombreProducto"]) &&isset($_POST["marcaProducto"]) &&isset($_POST["valorProducto"]) &&isset($_POST["fechaRegistro"]) &&isset($_POST["tipoProducto"])){
		if($_POST["nombreProducto"]!=""&& $_POST["marcaProducto"]!=""&&$_POST["fechaRegistro"]!=""){
			include "conexion.php";
			
			$sql = "update producto set nombreProducto=\"$_POST[nombreProducto]\",marcaProducto=\"$_POST[marcaProducto]\",valorProducto=\"$_POST[valorProducto]\",fechaRegistro=\"$_POST[fechaRegistro]\",tipoProducto=\"$_POST[tipoProducto]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='productos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='productos.php';</script>";

			}
		}
	}
}
?>