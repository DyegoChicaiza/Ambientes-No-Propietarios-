<?php

if(!empty($_POST)){
	if(isset($_POST["nombrePaciente"]) &&isset($_POST["fechaNacimiento"]) &&isset($_POST["especie"]) &&isset($_POST["sexo"]) &&isset($_POST["raza"]) &&isset($_POST["nombreDueno"]) &&isset($_POST["telefonoDueno"]) &&isset($_POST["direccionDueno"]) &&isset($_POST["correoDueno"]) &&isset($_POST["fechaRegistro"]) ){
		if($_POST["nombrePaciente"]!=""&& $_POST["fechaNacimiento"]!=""&&$_POST["sexo"]!=""){
			include "conexion.php";
			
			$sql = "insert into paciente (nombrePaciente,fechaNacimiento,especie,sexo,raza,nombreDueno,telefonoDueno, direccionDueno, correoDueno, fechaRegistro) value (\"$_POST[nombrePaciente]\",\"$_POST[fechaNacimiento]\",\"$_POST[especie]\",\"$_POST[sexo]\",\"$_POST[raza]\",\"$_POST[nombreDueno]\",\"$_POST[telefonoDueno]\",\"$_POST[direccionDueno]\",\"$_POST[correoDueno]\",\"$_POST[fechaRegistro]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='pacientes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='pacientes.php';</script>";

			}
		}
	}
}



?>