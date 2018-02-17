<?php
 session_start();
 if(isset($_SESSION['logueado']) and $_SESSION['logueado']){
    $nombre = $_SESSION['nombre'];
 }else{

    header('Location: ../index.php');
    exit;
 }
?>

<!DOCTYPE html>
<html>
 <head>
    <title> Página de bienvenida </title>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../estilos/bootstrap.min.css">
  	<link rel="stylesheet" href="../estilos/estilos2.css">
    <link rel="stylesheet" href="../estilos/animate.css">
    <link rel="stylesheet" href="../estilos/estilos_admin.css">
 </head>
 <body style="background-color: #D8D8D8;">
    <h3> Bienvenido/a <?php echo strtoupper($nombre); ?> </h3>
<div class="body-wrap">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-top" >
          <ul class="nav navbar-nav navbar-right" >
          	<li class="dropdown" style="width: 250px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b >+</b></a>
              <ul class="dropdown-menu" style="width: 250px;">
                <li><a href="#">Principal</a></li>
                <li><a href="#" onclick="mostrar2()">Atenciones</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
              </ul>
            </li>
            <li class="dropdown" style="width: 250px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b >+</b></a>
              <ul class="dropdown-menu" style="width: 250px;">
                <li><a href="#">Administracion del Sistema</a></li>
                <li><a href="#">Registro de pacientes</a></li>
                <li><a href="#">Registro de productos</a></li>
              </ul>
            </li>
            <li class="active" style="width: 250px;"><a href="#" target="_blank">Historial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b >+</b></a></li>
            <li class="dropdown" style="width: 250px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b >+</b></a>
              <ul class="dropdown-menu" style="width: 250px;">
                <li><a href="#">Por Historia (PDF)</a></li>
                <li><a href="#">Por fechas (excel)</a></li
              </ul>
            </li>            
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
  <?php require_once('admin.php'); ?>
</div>


 </body>
 <script type="module">
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="../js/validation/jquery.validate.js"></script>
	<script src="../js/validation/validacion.js"></script>
	<script src="../js/validation/additional-methods.min.js"></script>
    <script src="../js/validation/messages_es.min.js"></script>
	<script src="../js/bootstrap.min.js"></script> 
</html>