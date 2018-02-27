<?php require_once('a.php'); ?>
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
    <script src="../js/jquery.min.js"></script>
 </head>
 <body style="background-color: #D8D8D8;">
    <center><h3 style="color: white;"> Bienvenido/a <?php echo strtoupper($nombre); ?> </h3></center>
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">Inicio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b >+</b></a>
              <ul class="dropdown-menu" style="width: 250px;">
                <li><a href="bienvenida.php">Principal</a></li>
                <li><a href="descripcion.php">Descripción del Proyecto</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
              </ul>
            </li>
            <li class="dropdown" style="width: 250px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b >+</b></a>
              <ul class="dropdown-menu" style="width: 250px;">
                <li><a href="administrativos.php">Administracion del Sistema</a></li>
                <li><a href="profesionales.php">Registro de profesionales</a></li>
                <li><a href="pacientes.php">Registro de pacientes</a></li>
                <li><a href="productos.php">Registro de productos</a></li>
              </ul>
            </li>
            <li  style="width: 250px;"><a href="historial.php" target="_blank">Historial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b >+</b></a></li>
            <li  style="width: 250px;"><a href="reportes.php" target="_blank">Reportes</a></li>           
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
<!--apertura para las acciones-->

  <div>
    <h2>CONTROL DE PRODUCTOS</h2>
  </div>
  <hr>
  <!--apertura para el crud-->
  <?php include "crud_pac.php"; ?>
  <!--cierre para el crud-->
  <!---->
  <div class="container">
    <div class="row">
    <div class="col-md-6 ">
        <h2>EDITAR</h2>
    <?php include "formulario_pac.php";?>
    </div>
    </div>
  </div>
  <!---->
  <hr>

</div>


 </body>
 <script type="module">
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
  <script src="../js/bootstrap.min.js"></script>

</html>