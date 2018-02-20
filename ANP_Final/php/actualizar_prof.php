<?php

if(!empty($_POST)){
	if(isset($_POST["nombreProfesional"]) &&isset($_POST["cedulaProfesional"]) &&isset($_POST["ocupacion"])){
		if($_POST["nombreProfesional"]!=""&& $_POST["cedulaProfesional"]!=""&&$_POST["ocupacion"]!=""){
			include "conexion.php";
			
			$sql = "update profesional set nombreProfesional=\"$_POST[nombreProfesional]\",cedulaProfesional=\"$_POST[cedulaProfesional]\",ocupacion=\"$_POST[ocupacion]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='profesionales.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='profesionales.php';</script>";

			}
		}
	}
}
?>