<?php
  session_start();
 $usuarios = array(
    array('nombre' => 'johanna', 'contrasena' => 'j123'),
    array('nombre' => 'jazmin', 'contrasena' => 'j456'),
    array('nombre' => 'mishell', 'contrasena' => 'm789'),
    array('nombre' => 'diego', 'contrasena' => 'd012'),
    array('nombre' => 'jordan', 'contrasena' => 'j345')
 );
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $usuario_encontrado = false;
    foreach($usuarios as $item){

       if($nombre == $item['nombre'] and $contrasena == $item['contrasena']){
          $usuario_encontrado = true;
          break;
       }
    }

    if($usuario_encontrado){
       $_SESSION['logueado'] = true;
       $_SESSION['nombre'] = $nombre;
       header('Location: bienvenida.php');
       exit;
    }else{

   echo "Ingresa tus datos correctamente";    
    }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../estilos/bootstrap.min.css">
  	<link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="../estilos/animate.css">
</head>
<body>
	<div class="container">
	<!--INICIO MENU-->
		<div class="row">
          <nav role="navegation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false">
                  <span class="sr-only">Desplegar navegación</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>  
                <h2>Clinica Veterinaria "San Francisco"</h2>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-top" style="padding-top: 25px;">
                <ul class="nav navbar-nav navbar-right">                     
                  <li>
                    <a href="cerrar_sesion.php"> Página de Inicio </a>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    	</div>
    </div>
<hr>
<!--APERTURA LOGIN-->
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <table>
      <tr>
        <td>
          <div class="wrapper">
            <h2  class="animated bounceInDown" style="color: red;">Solo personal registrado</h2><br>
              <form class="form-signin" method="POST" action="login.php">       
                <center><img class="doglogin" src="../imagenes/cachorro.png"></center><br>  
            <input type="text" class="form-control" name="nombre" placeholder="username" required="" autofocus="" /><br>
                <input type="password" class="form-control" name="contrasena" placeholder="Password" required=""/>      
                <label class="checkbox">
                  <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordarmelo
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>   
              </form>
          </div>
        </td>
      </tr>
    </table>    
  </div>
</div>

<!--CIERRE LOGIN-->
</body>
</html>