<?php

if(!empty($_POST)){
	if(isset($_POST["nombreProfesional"]) &&isset($_POST["cedulaProfesional"]) &&isset($_POST["ocupacion"])){
		if($_POST["nombreProfesional"]!=""&& $_POST["cedulaProfesional"]!=""&&$_POST["ocupacion"]!=""){
			include "conexion.php";
			
			$sql = "insert into profesional(nombreProfesional,cedulaProfesional,ocupacion) value (\"$_POST[nombreProfesional]\",\"$_POST[cedulaProfesional]\",\"$_POST[ocupacion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='profesionales.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='profesionales.php';</script>";

			}
		}
	}
}



?>