<?php

if(!empty($_POST)){
	if(isset($_POST["nombrePaciente"]) &&isset($_POST["fechaNacimiento"]) &&isset($_POST["especie"]) &&isset($_POST["sexo"]) &&isset($_POST["raza"]) &&isset($_POST["nombreDueno"]) &&isset($_POST["telefonoDueno"]) &&isset($_POST["direccionDueno"]) &&isset($_POST["correoDueno"]) &&isset($_POST["fechaRegistro"]) ){
		if($_POST["nombrePaciente"]!=""&& $_POST["fechaNacimiento"]!=""&&$_POST["especie"]!=""){
			include "conexion.php";
			
			$sql = "update paciente set nombrePaciente=\"$_POST[nombrePaciente]\",fechaNacimiento=\"$_POST[fechaNacimiento]\",especie=\"$_POST[especie]\",sexo=\"$_POST[sexo]\",raza=\"$_POST[raza]\"
			,nombreDueno=\"$_POST[nombreDueno]\",telefonoDueno=\"$_POST[telefonoDueno]\",direccionDueno=\"$_POST[direccionDueno]\",correoDueno=\"$_POST[correoDueno]\",fechaRegistro=\"$_POST[fechaRegistro]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='pacientes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='pacientes.php';</script>";

			}
		}
	}
}
?>