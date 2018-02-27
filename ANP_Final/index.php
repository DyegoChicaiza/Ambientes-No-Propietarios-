<!DOCTYPE html>
<html>
<head>
	<title>Proyecto Final-Veterinaria</title>
	  <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="estilos/bootstrap.min.css">
  	<link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="stylesheet" type="text/css" href="estilos/barrasocial.css">
    <link rel="stylesheet" type="text/css" href="estilos/fuente.css">
    <style type="text/css">
    
</style>
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
                <img class="navbar-brand" src="imagenes/logo.png" style="height: 100px; width: 100px;">
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
                    <a href="#galeria">Galeria <br> <img src="imagenes/menu/galeria.png"></a>
                  </li> 
                  <li>
                    <a href="#nosotros">Nosotros <br> <img src="imagenes/menu/nosotros.png"></a>
                  </li>
                  <li>
                    <a href="#contacto">Contáctenos <br> <img src="imagenes/menu/contactanos.png"></a>
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
				   <img alt="100%x600" data-src="holder.js/100%x600" style="height: 600px; width: 100%; display: block;" src="imagenes/slider/s.png">
					<div class="carousel-caption " style="text-align: center; ">
			            <h3 style="color: black;">Atención las 24 Horas</h3>
			            </div>
				</div>  
				<div class="item">
				   <img alt="100%x600" data-src="holder.js/100%x600" style="height: 600px; width: 100%; display: block;" src="imagenes/slider/b.png">
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
<h2 >Servicios</h2>
<div style="padding-left: 25px;" id="servicios">
  <div class="row" >
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Emergencias</h2>
           <p class="zero">El servicio es 24 horas los 7 días de la semana. LLámanos para el servicio de ambulancia. 
          Telf: (02) 3010856/(02) 2234886/(09) 0995743285
        </li>
        <li><img class="top" src="imagenes/servicios/areas-emergencia.jpg" alt="" id="services" style="width:320px;
    height:300px;" /></li>
      </ul>   
    </div>
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Cirugía</h2>
           <p class="zero">Las cirugías son efectuadas con la mejor tecnología para garantizar el bienestar de nuestros pacientes.Se realizan estrictamente previo cita médica.
           Telf: (02) 3010856/(02) 2234886/(09) 0995743285 </p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-cirugia.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul> 
    </div> 
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Traumatología</h2>
           <p class="zero">El área de traumatología está garantizada por el mejor especialista Dr.Siribio Gómez con 20 años de experiencia. Las citas y cirugías en esta área son realizadas previo citas médicas. Telf: (02) 3010856/(02) 2234886/(09) 0995743285</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-traumatologia.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul> 
    </div>
    <div class="col-sm-3"> 
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Dermatología!</h2>
           <p class="zero">El área de dermatología brinda con el diagnóstico y tratamiento personalizado de las diferentes dermatosis en nuestros pacientes, así como, a particulares que deseen una visita especializada en Dermatología.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-dermatologia.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul>  
    </div> 
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Cardiología</h2>
           <p class="zero">El área de cardiología brinda con el diagnóstico y tratamiento personalizado a fenómenos fisiopatológicos de los distintos síndromes cardiológicos contando con los mejores especialistas y equipo adecuado.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-cardiologia002.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul>     
    </div>
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Rayos X y Radiografía</h2>
           <p class="zero">Los servicios de Rayos X y Radiografía son gentiles con el medio ambiente y con mucho menor riesgo para el personal como para el paciente, cumpliendo con las normas oficiales de Ecuador. Contamos con los equipos más modernos.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-rayos-x.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul>  
    </div> 
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Odontología</h2>
           <p class="zero">El área de odontología brinda con el diagnóstico y tratamiento personalizado a patologías bucales y dentales contando con los mejores especialistas y la mejor tecnología.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-odontologia.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul>  
    </div>
    <div class="col-sm-3">
      <ul class="demo-2 effect">
        <li>
           <h2 class="zero">Oftalmología</h2>
           <p class="zero">El área de oftalmología brinda con el diagnóstico y tratamiento personalizado a patologías oculares contando con los mejores especialistas y la mejor tecnología.</p>
        </li>
        <li><img class="top" src="imagenes/servicios/areas-oftalmologia.jpg" alt="" id="services" style="width:320px;
    height:300px;"/></li>
      </ul> 
    </div> 
  </div> 
</div>
<!--CIERRE SERVICIOS-->

<!--APERTURA GALERÍA-->
<div background-color: black;>
<h2>Galeria</h2>
<div id="galeria" class="gal">
  <li><a href=""><img src="imagenes/galeria/img1.jpg" ></a></li>
  <li><a href="#"><img src="imagenes/galeria/img2.jpg"/></a></li>
  <li><a href="#"><img src="imagenes/galeria/img3.jpg"/></a></li>
  <li><a href="#"><img src="imagenes/galeria/img4.jpg"/></a></li>
  <li><a href="#"><img src="imagenes/galeria/img5.jpg" ></a></li>
  <li><a href="#"><img src="imagenes/galeria/img6.jpg"/></a></li>
  <li><a href="#"><img src="imagenes/galeria/img7.jpg"/></a></li>
  <li><a href="#"><img src="imagenes/galeria/img8.jpg"/></a></li>
</div>
</div>
<!--CIERRE GALERÍA-->

<!--APERTURA NOSOTROS-->
<div id="nosotros">
<h2>NOSOTROS</h2>
<h3>CONÓCENOS</h3>
<p align="left">
  Clínica Veterinaria "San Francisco" tiene más de 10 años de experiencia contando con los mejores profesionales del Ecuador. La clínica garantiza el total profesionalismo y respeto hacia nuestros pacientes. 
  Los pacientes y su salud son la prioridad de la clinica. </br>Se han atendido cientos de pacientes en las peores situaciones. Por lo que el objetivo de la clínica es lograr que en el país se aumente las visitas a los veterinarios cuando el paciente presente los primeros síntomas.
</p>
</div>
<!--CIERRE NOSOTROS-->

<!--APERTURA CONTACTENOS-->

<div id="contacto">
<h2>CONTÁCTENOS</h2>
<p>Estamos ubicados en la Av.12 de Octubre y Veintimilla S17-456 frente a la parada de las Universidades. Contamos con servicio de ambulancia y emergencias las 24 horas y los 7 días a la semana. 
<br/>Telf: (02) 3010856/(02) 2234886/(09) 0995743285
<br/>No olvides visitar nuestras redes sociales, donde por lo general respondemos tus dudas inmediatamente. 
<br/>El horario de atención es de Lunes a Domingo. Lunes a Sábado de 8 am a 5pm y Domingos y Feriados de 9 am a 2pm.
</p>
</div>
<!--REDES SOCIALES-->
<div class="social">
  <ul>
    <li><a href="https://www.facebook.com" class="icon-facebook2"></a></li>
    <li><a href="https://www.youtube.com" class="icon-youtube"></a></li>
    <li><a href="http://www.twitter.com" class="icon-twitter"></a></li>
  </ul>
</div>
<!--CIERRE CONTACTENOS-->

<!--APERTURA PIE DE PAGINA-->
<div id="piedepagina">
          
</div>
<!--CIERRE PIE DE PAGINA-->



</body>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
</html>