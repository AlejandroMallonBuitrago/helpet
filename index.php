<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helpet by smartech</title>
		<meta charset="utf-8" />
		<meta charset="UTF-8">
        <title>Ayuda a encontrar | Helpet</title>
        <meta name="description" content="Ayuda a encontrar, recuperar y adoptar mascotas"/>
        <meta name="keywords" content="encontrar mi mascota, recuperar mi mascota, adoptar una mascota, poner en adopción mi mascota"/>
        <meta name="author" content="Alejandro Mallon Buitrago" />
        <link rel="shortcut icon" type="image/png" href="img/logito.png"/> <!-- ------------Arreglar favicon------------- -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
                <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

                <link rel="stylesheet" href="css/swiper.min.css">
                        
                <style>
                    @import url(https://fonts.googleapis.com/css?family=Khula:700);

.hidden {
  opacity:0;
}
.console-container {

  font-family: 'Lato', sans-serif;
  font-size:2.8em;
  color: #fff;
  font-weight: 600;
  margin-bottom: 1em;
  margin-left: 2.7em;

}
.console-underscore {
  display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}

.finita{
    color: #fff;
    font-weight: 100;
    opacity: 0.8;   
}

@media screen and (max-width: 840px) {
    .console-container {

  font-family: 'Lato', sans-serif;
  font-size:3em;
  color: #fff;
  font-weight: 600;
  margin-bottom: 1.75em;
  text-align: left;
  margin-left: 2.5em;
}
@media screen and (max-width: 736px) {
        .console-container {

  font-family: 'Lato', sans-serif;
  font-size:1.3em;
  color: #fff;
  font-weight: 600;
  margin-bottom: 1.75em;
  text-align: left;
  margin-left: 0em;
}
    
}




/*-=-=-=-=-=-=-=-=-=-=-=- */
/* Column Grids */
/*-=-=-=-=-=-=-=-=-=-=-=- */

.col_half { width: 49%; }
.col_third { width: 32%; }
.col_fourth { width: 23.5%; }
.col_fifth { width: 18.4%; }
.col_sixth { width: 15%; }
.col_three_fourth { width: 74.5%;}
.col_twothird{ width: 66%;}
.col_half,
.col_third,
.col_twothird,
.col_fourth,
.col_three_fourth,
.col_fifth{
	position: relative;
	display:inline;
	display: inline-block;
	float: left;
	margin-right: 2%;
	margin-bottom: 20px;
}
.end { margin-right: 0 !important; }
/* Column Grids End */

.wrapper { width: 980px; margin: 30px auto; position: relative;}
.counter { background-color: #ffffff; padding: 20px 0; border-radius: 5px;}
.count-title { font-size: 40px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.count-text { font-size: 13px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.fa-2x { margin: 0 auto; float: none; display: table; color: #4ad1e5; }

    
}


/*/ start count stats /*/

section#counter-stats {
	display: flex;
	justify-content: center;
	margin-top: 10px;
}

.stats {
  text-align: center;
  font-size: 25px;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
}

.stats .fa {
  color: #008080;
  font-size: 60px;
}

/*/ end count stats /*/


/* //////////////////////////////CENTRAR SIN RESPONSIVE :( ///////////////////////////// */
    .row{
  display: flex;
  justify-content: center;
}


/* /////////////////////////////////CUENTA ATRÁS////////////////////////////////// */


.counter2 {
	    display: flex;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-top: 60px;
    margin-bottom: -50px;
}
.days-title, .hours-title, .seconds-title, .minutes-title {
    display: inline-block;
    font-size: 25px;
    font-weight: normal;
    margin: 0 15px;
    text-align: center;
}
.days, .hours, .minutes {
    font-size: 75px;
    font-family: "soleil", sans-serif;
    font-weight: bold;
    margin: 0 15px;
    text-align: center;
    margin-top: 18px;
}
.seconds {
    font-size: 75px;
    font-family: "soleil", sans-serif;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
}

.simple-text{
  position: fixed;
  bottom: 1px;
  width: 100%;
  text-align: center;
  font-size: 17px;
}
@media only screen and (max-width: 920px) {
    .days, .hours, .minutes, .seconds {
        font-size: 70px;
        margin: 0 10px;
        margin-top: 20px;
    }

    .days-title, .hours-title, .seconds-title, .minutes-title {
        font-size: 20px;
        margin: 0 10px;
    }


    .simple-text{
      font-size: 15px;
    }
}
@media only screen and (max-width: 550px) {
    .days, .hours, .minutes,.seconds {
        font-size: 40px;
        margin: 0 10px;
    }
  
    .days-title, .hours-title, .seconds-title, .minutes-title {
        font-size: 15px;
        margin: 0 10px;
    }


    .simple-text{
      font-size: 14px;
    }
}

/* Iphone 4, potrait etc.--> */

@media only screen and (max-width: 400px) {
    .days, .hours, .minutes, .seconds {
        font-size: 30px;
        margin: 0 5px;
    }

    .days-title, .hours-title, .seconds-title, .minutes-title {
        font-size: 15px;
        margin: 0 5px;
    }

    .simple-text{
      font-size: 10px;
    }
}


/* /////////////////////////////CONTADORES////////////////////////////////// */

@media only screen and (max-width: 920px) {

.contadores2, .contadores2 .counter {
	
}


.contadores2 h5{
	font-size: 0.5em;
}

}

/* /////////////////////////////LOVE////////////////////////////////// */

.footer-love {
  position:absolute;
  right: 1.5rem;
  bottom: 2.5rem;
  font-size: 0.85rem;
  font-family: 'Lato', sans-serif;
  z-index:9999;
}
  .love-heart {
    background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/heart-smil.svg);
    width:16px;
    height:16px;
    display:inline-block;
    margin:0 5px 0 0; 
    vertical-align:middle;
  }
 .footer-love a {color:#43abf0;}
}


/* //////////////////////////MOUSE////////////////////////// */

.aniWrap2 {
  margin: 40px auto;
  width: 28px;
  display: block;
}

.mouse2 {
	margin-top: 20px;
	margin-left: 48%;
  width: 28px;
  height: 50px;
  border: 2px solid #777777;
  border-radius: 14px;
  -webkit-animation: mouse 1.3s ease-out infinite ; /* Chrome, Safari, Opera */
}

.scroller2 {
  width: 4px;
  height: 4px;
  border-radius: 2px;
  background: #777777;
  position: relative;
  top: 10px;
  left: 10px;
}


@-webkit-keyframes mouse {
    0%   {transform: rotate(-7deg);}
    25%   {transform: rotate(7deg);}
    65% {transform: rotate(-7deg);}
  	95% {transform: rotate(7deg);}
}




   </style>
	</head>
	<body class="landing">
            
            <?php

    if (session_id() != null){
 require 'ventana.php';
 session_start();
  }


    
    
    
include('misfunciones.php');
$mysqli = conectaBBDD();
//ejemplo de volcado de una query a un array en php
//creo el array
$perdido = array();
$consulta_perdido = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Perdido'");
$num_perdido = $consulta_perdido->num_rows;
$p = $consulta_perdido->fetch_array();

/////////////////////

$encontrado = array();
$consulta_encontrado = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Encontrado'");
$num_encontrado = $consulta_encontrado->num_rows;
$e = $consulta_encontrado->fetch_array();

////////////////////

$recuperado = array();
$consulta_recuperado = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Recuperado'");
$num_recuperado = $consulta_recuperado->num_rows;
$r = $consulta_recuperado->fetch_array();

////////////////////

$adopcion = array();
$consulta_adopcion = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Adopcion'");
$num_adopcion = $consulta_adopcion->num_rows;
$adn = $consulta_adopcion->fetch_array();

////////////////////

$adoptado = array();
$consulta_adoptado = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Adoptado'");
$num_adoptado = $consulta_adoptado->num_rows;
$ado = $consulta_adoptado->fetch_array();

////////////////////

$total = array();
$consulta_total = $mysqli->query("SELECT COUNT(*) as contador FROM usuario");
$num_total = $consulta_total->num_rows;
$t = $consulta_total->fetch_array();


?>
   
           
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.html">Helpet</a> by smartech</h1>
					<nav id="nav">
						<ul>
							<li><a href="inicioSesion.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
                                    <h2>Helpet</h2>
                                        <div class='console-container'><span class="finita">Ayuda a encontrar </span><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
					<ul class="actions">
                                            <li><a href="inicioSesion.php" class="button special" style="margin-left: 7.5em; margin-top: 50px;">Registrarte</a></li>
						<li><a href="inicioSesion.php" class="button" style="margin-top: 50px;">Entrar</a></li>
					</ul>


				    <div class="counter2">
				       	<div class="days-title" style="color: white">días
				            <div class="days"></div>
				        </div>
				        <div class="hours-title" style="color: white">horas
				            <div class="hours"></div>
				        </div>
				        <div class="minutes-title" style="color: white">minutos
				            <div class="minutes"></div>
				        </div>
				        <div class="seconds-title" style="color: white">segundos
				            <div class="seconds"></div>
				        </div>
				    </div>

				    <div class="simple-text">...quedan para el lanzamiento! Página en construcción BETA :)</div>


					
				</section>

<!-- start count stats -->



<!-- end cont stats -->

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
<!--							<h2>Introducing the ultimate mobile app
							<br />
							for doing stuff with your phone</h2>-->
<!-- <div class="contadores"><div class="counter" style="float: left;" data-count="<?php //echo $p['contador'];?>">440</div><div style="clear: both;">Perdidos</div></div>
<div class="contadores"><div class="counter" style="float: left;" data-count="<?php //echo $e['contador'];?>">440</div>Encontrados</div>
<div class="contadores"><div class="counter" style="float: left;" data-count="<?php //echo $r['contador'];?>">440</div>Recuperados</div>
<div class="contadores"><div class="counter" style="float: left;" data-count="<?php //echo $adn['contador'];?>">440</div>En adopción</div>
<div class="contadores"><div class="counter" style="float: left;" data-count="<?php //echo $ado['contador'];?>">440</div>Adoptados</div> -->
							
<section id="counter-stats" class="wow fadeInRight contadores2" style="cursor: w-resize;">
	<div class="container swiper-container" text-align="center">
            <div class="row swiper-wrapper">

          

			<div class="col-md-2 stats">
				<i class="contadores" aria-hidden="true"><img src="images/png/008-bulldog.png" style="margin-bottom: 12px;" /></i>
				<div class="counter" data-count="<?php echo $p['contador'];?>">0</div>
				<h5>Perdidos</h5>
			</div>

			<div class="col-md-2 stats">
				<i class="contadores" aria-hidden="true"><img src="images/png/005-cat-1.png" style="margin-bottom: 12px;" /></i>
				<div class="counter" data-count="<?php echo $e['contador'];?>">0</div>
				<h5>Encontrados</h5>
			</div>

			<div class="col-md-2 stats">
				<i class="contadores" aria-hidden="true"><img src="images/png/004-dog.png" style="margin-bottom: 12px;" /></i>
				<div class="counter" data-count="<?php echo $r['contador'];?>">0</div>
				<h5>Recuperados</h5>
			</div>

			<div class="col-md-2 stats">
				<i class="contadores" aria-hidden="true"><img src="images/png/006-cat.png" style="margin-bottom: 12px;" /></i>
				<div class="counter" data-count="<?php echo $adn['contador'];?>">0</div>
				<h5>Adopción</h5>
			</div>

			<div class="col-md-2 stats">
				<i class="contadores" aria-hidden="true"><img src="images/png/007-kennel.png" style="margin-bottom: 12px;" /></i>
				<div class="counter" data-count="<?php echo $ado['contador'];?>">0</div>
				<h5>Adoptados</h5>
			</div>

			<div class="col-md-2 stats">
				<i class="contadores" aria-hidden="true"><img src="images/png/familia.png" style="margin-bottom: 12px;" /></i>
				<div class="counter" data-count="<?php echo $t['contador'];?>">0</div>
				<h5>Familias</h5>
			</div>

	


		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

</section>


<!-- ---------------------------INICIO MOUSE---------------------------- -->
	
<div class="aniWrap2">
  	<div class="mouse2">
    	<div class="scroller2">
    	</div>
  	</div>
</div>

<!-- ---------------------------FIN MOUSE---------------------------- -->



<p><i>"Un país, una civilización se puede juzgar por la forma en que trata a sus animales."</i><br />
							<b>Mahatma Gandhi (1869-1948)</b></p>
						</header>
						<span class="image featured"><img src="images/sloganImg.png" alt=""/></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Magna etiam</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Ipsum dolor</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Sed feugiat</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Enim phasellus</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Tobby</h3>
								<p>Es el guardián de nuestra casa, se ha perdido y suele comer bastante, no recomendable quedarselo. Si lo encuentras por favor contacta con nosotros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/bg.jpg" alt="" /></span>
								<h3>Gordeti</h3>
								<p>Pertenece a nuestra familia, y se perdió mientras estabamos en un parque. Es muy amigable, nada agresivo. Si lo encuentras llamanos.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Subscribete a nuestra newsletter</h2>
					<p>Para así enterarte de todo lo que ocurra en nuestra aplicación, con el fin de ayudarnos entre todos :)</p>

					<form>
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit"/>
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/helpetspain" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label" target="_blank">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/helpetspain/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/AlejandroMallonBuitrago" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
						<li><a href="https://dribbble.com/AlejandroMallon" class="icon fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
						<li><a href="https://plus.google.com/u/0/116654182385691955189" class="icon fa-google-plus" target="_blank"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Helpet. All rights reserved.</li><li><div class="footer--love">
  <p>With <span class="love-heart"></span>by <a href="https://twitter.com/alejandromallon" target="_blank">@AlejandroMallon</a></p>
</div></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script src="js/swiper.jquery.min.js"></script>
			<script src="js/swiper.min.js"></script>


                        <script>
                            // function([string1, string2],target id,[color1,color2])    
 consoleText(['un perro.', 'un gato.', 'una mascota.', 'un hogar.'], 'text',['#fff','#fff','#fff']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id);
  target.setAttribute('style', 'color:' + colors[0]);
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount);
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0]);
        letterCount += x;
        waiting = false;
      }, 1000);
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000);
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount);
      letterCount += x;
    }
  }, 120);
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden';
      visible = false;

    } else {
      con.className = 'console-underscore';

      visible = true;
    }
  }, 400);
};





$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
     
    
                        $({ countNum: $this.text()}).animate({
                            countNum: countTo
                          },

                          {

                            duration:3000,
                            easing:'swing',
                            step: function() {
                              $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                              $this.text(this.countNum);
                              //alert('finished');
                            }

                          });  
                       
  
  

});


    $(document).ready(function () {
                var menu = $('#menu');
                var mostrar = $('#mostrar');
                var menu_offset = menu.offset();
                

                $(window).on('scroll', function () {
                    if ($(window).scrollTop() > menu_offset.top()) {
                      
                        
                    } else {
                        
                        return;
                        
                    }
                });     
            });



    // //////////////////////////////CUENTA ATRÁS//////////////////////////////////



    //Set countdown goal here   
   var goalDay = '2017/06/06 10:45:00'

   var timerId = 0;
   timerId = setInterval(function() {
     var t = Date.parse(goalDay) - Date.parse(new Date());
     if (t < 0) {
       $(".days").text("0");
       $(".hours").text("0");
       $(".minutes").text("0");
       $(".seconds").text("0");
       clearInterval(timerId);
     } else {
       var seconds = Math.floor((t / 1000) % 60);
       var minutes = Math.floor((t / 1000 / 60) % 60);
       var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
       var days = Math.floor(t / (1000 * 60 * 60 * 24));
       $(".days").text(days);
       $(".hours").text(hours);
       $(".minutes").text(minutes);
       $(".seconds").text(seconds);
     }
   }, 1000); // repeat forever, polling every second


   // ///////////////////////////////// SWIPER ////////////////////////////////////

   var swiper = new Swiper('.swiper-container', {
        
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 20,
        speed: 120000000,
        loop: false
    });

// //////////////////////////////// RECOGER EMAIL PARA SUBSCRIPCION //////////////////////////

            function chequeaEmail() {
                var _email = $('#email').val();
                console.log(_email);
                document.getElementById('errorEmail').innerHTML='';
                
                
                if (_email !== ""){
                    if( validar_email( _email ) ){
    
                
                }else{
                  document.getElementById('errorEmail').innerHTML='*Debes poner un email válido';
                }
                }else{
                  document.getElementById('errorEmail').innerHTML='*Debes rellenar todos los datos';
                }
            };

  function validar_email( email ) 
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}        

     </script>

	</body>
</html>