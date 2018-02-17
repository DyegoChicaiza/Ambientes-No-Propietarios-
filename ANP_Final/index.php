<!DOCTYPE html>
<html>
<head>
	<title>Proyecto Final-Veterinaria</title>
	  <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="estilos/bootstrap.min.css">
  	<link rel="stylesheet" href="estilos/estilos.css">
</head>
<body data-spy="scroll" data-target="#navbar-top">
  <br>
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
                <img class="navbar-brand" src="imagenes/cachorro.png" style="height: 100px; width: 100px;">
                <h4>Clinica Veterinaria "San Francisco"</h4>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-top" style="padding-top: 25px;">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="#inicio">Inicio <br> <img src="imagenes/menu/inicio.png"></a>    
                  </li>
                  <li>
                    <a href="#servicios">Servicio <br> <img src="imagenes/menu/sevicio.png"></a>
                  </li>
                  <li>
                    <a href="#ser">Galeria <br> <img src="imagenes/menu/galeria.png"></a>
                  </li> 
                  <li>
                    <a href="#ser">Nosotros <br> <img src="imagenes/menu/nosotros.png"></a>
                  </li>
                  <li>
                    <a href="#ser">Sede <br> <img src="imagenes/menu/sedes.png"></a>
                  </li> 
                  <li>
                    <a href="#ser">Contáctenos <br> <img src="imagenes/menu/contactanos.png"></a>
                  </li>
                  <li>
                    <a href="php/login.php">Administrativos<br> <img src="imagenes/menu/login.png" style="width: 45px; height: 45px;"></a>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    	</div>
    </div>
	<!--CIERRE MENU-->

	<!--INICIO CAROUSEL-->
  <div class="row" id="carusel_action"> <!--style="padding-top: 180px;"-->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators" >
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active" style="background-color: black;"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1" style="background-color: black;"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				   <img alt="100%x600" data-src="holder.js/100%x600" style="height: 600px; width: 100%; display: block;" src="imagenes/juju.jpg">
					<div class="carousel-caption " style="text-align: center; ">
			            <h3 style="color: black;">Atención las 24 Horas</h3>
			            </div>
				</div>  
				<div class="item">
				   <img alt="100%x600" data-src="holder.js/100%x600" style="height: 600px; width: 100%; display: block;" src="imagenes/e.png">
					<div class="carousel-caption " style="text-align: center; ">
			           
			            <h3 style="color: black;">Atención las 24 Horas</h3>
			            </div>
				</div>  
				</div>
				<!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>			
			</div>	
			
		</div>
	<!--CIERRE CAROUSEL-->
<!--APERTURA SERVICIOS -->
<div style="padding-left: 25px;" id="servicios">
  <h2>Servicios</h2>
  <div class="row" >
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-emergencia.jpg" alt="" id="services" style="width:350px;
    height:300px;" /></li>
      </ul>   
    </div>
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-cirugia.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul> 
    </div> 
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-traumatologia.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul> 
    </div>
    <div class="col-sm-3"> 
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-dermatologia.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul>  
    </div> 
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-cardiologia002.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul>     
    </div>
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-rayos-x.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul>  
    </div> 
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-odontologia.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul>  
    </div>
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">This is a cool title!</h2>
           <p class="zero">Lorem ipsum dolor sit amet.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-oftalmologia.jpg" alt="" id="services" style="width:350px;
    height:300px;"/></li>
      </ul> 
    </div> 
  </div> 
</div>

<!--CIERRE SERVICIOS-->

<!--APERTURA PIE DE PAGINA-->
<div id="piedepagina">
          
</div>
<!--CIERRE PIE DE PAGINA-->



</body>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="js/validation/jquery.validate.js"></script>
	<script src="js/validation/validacion.js"></script>
	<script src="js/validation/additional-methods.min.js"></script>
    <script src="js/validation/messages_es.min.js"></script>
	<script src="js/bootstrap.min.js"></script> 
</html>