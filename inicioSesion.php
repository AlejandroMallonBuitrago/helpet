<!DOCTYPE html>
<?php
session_start();
include ("comprobarSesion.php");


if (isset($_GET['err'])){
$_err = $_GET['err'];
if (isset($_GET['email'])){
  $_email = $_GET['email'];
}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ayuda a encontrar | Helpet</title>
        <meta charset="UTF-8">
        <meta name="description" content="Ayuda a encontrar, recuperar y adoptar mascotas"/>
        <meta name="keywords" content="encontrar mi mascota, recuperar mi mascota, adoptar una mascota, poner en adopción mi mascota"/>
        <meta name="author" content="Alejandro Mallon Buitrago" />
        <link rel="shortcut icon" type="image/png" href="img/logito.png"/> <!-- ------------Arreglar favicon------------- -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="css/masonry-docs.css" media="screen">  -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">


        <style>
            
@import url(https://fonts.googleapis.com/css?family=Roboto+Slab);
* {
  margin: 0;
  padding: 0;
}

body {
  overflow-x: hidden;
  /*overflow-y: hidden;*/
  /*background-image: url(img/fondo.png);*/
  background-color: white;
 
}



hr {
  margin-top: 10px;
  border: none;
  border-top: 1px solid #EE283D;
}



.bar {
  position:fixed;
  height: 50px;
  width: 100%;
  background: #44B6EC;
  z-index: 4;
  top:0;
}

.menu-espanso {
  background-color: transparent;
  position: fixed;
	width: 340px;
  height:100%;
  top: 0px;
  right: 0px;
  overflow: hidden !important;
  z-index: 5;
}

.menu,
.linee {
  cursor: pointer;
}

.menu-in {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  height: 49px;
  width: 49px;
  border-radius: 50%;
  background-color: #fe8332;
  border: none;
  transition: all 0.40s ease-out;
}

.menu {
  position: absolute;
  right: 0;
  margin: 15px 15px 0 0;
  height: 49px;
  width: 49px;
  border-radius: 50%;
  background-color: transparent;
  border: none;
  transition: all 0.40s ease-out;
}

.over {
  width: 2000px;
  height: 2000px;
  transition: all 0.350s ease-in;
  cursor: default;
}

.linea1 {
  background: #fff;
  height: 2px;
  width: 15px;
  position: absolute;
  right: 33px;
  top: 33px;
  transition: all 0.3s;
}

.linea2 {
  background: #fff;
  height: 2px;
  width: 15px;
  position: absolute;
  right: 33px;
  top: 38px;
  opacity: 1;
  transition: opacity 0.5s;
}

.linea3 {
  background: #fff;
  height: 2px;
  width: 15px;
  position: absolute;
  right: 33px;
  top: 43px;
}

.overL1 {
  animation: closetop 1s forwards;
  animation-direction: alternate;
  cursor: pointer;
}

.overL2 {
  opacity: 0;
  transition: opacity 0.5s;
  cursor: pointer;
}

.overL3 {
  animation: closebottom 1s forwards;
  animation-direction: alternate;
  cursor: pointer;
}

@keyframes closetop {
  0% {
    transform: translateY(5px) rotate(0deg);
  }
  25% {
    transform: translateY(5px) rotate(0deg);
  }
  75% {
    transform: translateY(5px) rotate(-45deg);
  }
  100% {
    transform: translateY(5px) rotate(-45deg);
  }
}

@keyframes closebottom {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  25% {
    transform: translateY(-5px) rotate(0deg);
  }
  75% {
    transform: translateY(-5px) rotate(45deg);
  }
  100% {
    transform: translateY(-5px) rotate(45deg);
  }
}

.voci-menu {
  visibility: hidden;
  position: absolute;
  right: 50px;
  top: 160px;
  opacity: 0;
  transition: all 0.300s;
  transition-delay: 0s;
}

.overvoci {
  visibility: visible;
  opacity: 1;
  transition: all 0.400s;
  transition-delay: 0.370s;
}

.voci-menu ul {
  list-style-type: none;
  font-size: 2em;
}

.voci-menu ul li {
  margin: 20px 0px;
}

.voci-menu ul li a {
  float: right;
  text-decoration: none;
  color: white;
  margin-top: 20px;
}

.voci-menu ul li a:hover {
  opacity: 0.7;
}

.footer {
  position: relative;
  padding-top: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  z-index: 2;
  background: #5F5F5F;
  width: 100%;
  height: 150px;
}

.footer div {
  width: 200px;
  text-align: center;
}

.footer div ul {
  list-style-type: none;
}

.footer div ul li span {
  text-align: center;
  text-decoration: none;
  color: transparent;
  background-color: #999;
  margin-top: 10px;
  display: inline-block;
}

            
.navbar2 {
                 /*box-shadow: 1px 1px 3px #999;*/
                 box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26);
                 
            }
            
            
            
            
            
            
            
/*_________________________Btn 3D__________________________________*/

.animateBtn
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{
	position: relative;
	padding: 5px 15px;
        margin: 5px 10px 10px 0px;
        float: right;
	border-radius: 10px;
	font-family: 'Lato', sans-serif;
	font-size: 23px;
	color: #FFF;
	text-decoration: none;	
        font-weight: bold;
        
}

.action-button:hover{
    text-decoration: none;
    color: #FFF;
    cursor: pointer;
}

.orange
{
	background-color: #fe8332;
	border-bottom: 5px solid #e45c01;

}

.green
{
	background-color: #71d72b;
	border-bottom: 5px solid #37a400;

}

.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
        text-decoration: none;	
}    
    



/*__________________________Cajas Animales_____________________________


#cajas{
   
    margin-left: 2%;
    margin-top: 2%;
    background-color: white;
    border-radius: 12px 12px 12px 12px;
    width: 250px;
    float: left;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.1), 0 2px 5px 0 transparent;
    display: block;
    overflow: hidden;
    position: static;
    font-size: 0.7rem;
    line-height: 0.8rem;
    
    display: inline-block;
    break-inside: avoid;

}

#cajas2{
   
    height: 82px;
    background-color: white;
    border-bottom: 1px solid #f6f6f6;
    padding: 1rem .7rem;
    transition: all .25s ease;
}

#cajas3{
   
    height: 54px;
    background-color: white;
    border-radius: 0px 0px 12px 12px;
}

#cajas3:hover {
    
    background-color: #f6f6f6;
}*/


/*__________________________Cajas principal_____________________________*/

.inicioCajaSup{
    width: 100%;
    height: 100%;
    position: fixed;

}

/*__________________________Triangulo inferior_____________________________*/

.triangulo {
    position:absolute; /*El div será ubicado con relación a la pantalla*/
left:0px; /*A la derecha deje un espacio de 0px*/
right:0px; /*A la izquierda deje un espacio de 0px*/
bottom:0px; /*Abajo deje un espacio de 0px*/
height:120px; /*alto del div*/
z-index:0;
}


/*--------------------------------Islas Flotantes--------------------------------------*/




@import "compass/css3";



@keyframes float {
  from {
    transform:translateY(8px));
  }

  to {
     transform:translateY(-8px);
  }
}

@keyframes float2 {
  from {
    transform:rotate(360deg));
  }

  to {
     transform:rotate(-360deg);
  }
}


.island_wrapper{
  position:absolute;
  top:11%;
  left:6%;
  align-content: center;
}

.island_wrapperNight{
  position:absolute;
  top:28%;
  left:6%;
  align-content: center;
}

.island_wrapper1{
  position:absolute;
  top:21%;
  left:16%;
  align-content: center;
}

.island_wrapper2{
  position:absolute;
  top:18%;
  left:23%;
  align-content: center;
}

.island_wrapper3{
  position:absolute;
  top:54%;
  left:45%;
  align-content: center;
}

.island_wrapper4{
  position:absolute;
  top:31%;
  left:27%;
  align-content: center;
}

.island_wrapper5{
  position:absolute;
  top:34%;
  left:19%;
  align-content: center;
}

.island_wrapper6{
  position:absolute;
  top:3%;
  left:4%;
  align-content: center;
}

.island {
  position:relative;
  animation-duration: 1.2s;
  animation-name: float;
  animation-iteration-count: infinite;
  animation-timing-function:ease-in-out;
  animation-direction: alternate;
  animation-play-state: running;
}

.island1 {
  position:relative;
  animation-duration: 1.1s;
  animation-name: float;
  animation-iteration-count: infinite;
  animation-timing-function:ease-in-out;
  animation-direction: alternate;
  animation-play-state: running;
}

.island2 {
  position:relative;
  animation-duration: 1s;
  animation-name: float;
  animation-iteration-count: infinite;
  animation-timing-function:ease-in-out;
  animation-direction: alternate;
  animation-play-state: running;
}

.island3 {
  position:relative;
  animation-duration: 0.9s;
  animation-name: float;
  animation-iteration-count: infinite;
  animation-timing-function:ease-in-out;
  animation-direction: alternate;
  animation-play-state: running;
}


.island4 {
  position:relative;
  animation-duration: 1.3s;
  animation-name: float2;
  animation-iteration-count: infinite;
  animation-timing-function:ease-in-out;
  animation-direction: alternate;
  animation-play-state: running;
}

.island5 {
  position:relative;
  animation-duration: 1.1s;
  animation-name: float;
  animation-iteration-count: infinite;
  animation-timing-function:ease-in-out;
  animation-direction: alternate;
  animation-play-state: running;
}

      .ocultar {
                display:none;   
            
      }
            

      .fondoDia {
        background-color: #8ccef1;
      }       
      
      .fondoNoche {
        background-color: #2F2F47;  
      }   

/*__________________________Gif Jirafa&Tree_____________________________*/

.imgJirafi{
    transform: scale(0.3);
    position:absolute; /*El div será ubicado con relación a la pantalla*/

right:-150px; /*A la izquierda deje un espacio de 0px*/
bottom:-150px; /*Abajo deje un espacio de 0px*/
z-index:0;
float: right;
    
}

.imgTree{
    transform: scale(0.4);
    position:absolute; /*El div será ubicado con relación a la pantalla*/

right:145px; /*A la izquierda deje un espacio de 0px*/
bottom:-60px; /*Abajo deje un espacio de 0px*/
z-index:0;
float: right;
    
}


/*__________________________Cajas insertar datos_____________________________*/




.sign-up-input {
  width: 300px;
  height: 60px;
  margin-bottom: 5px;
  padding: 0 15px 2px;
  font-size: 20px;
  background: white;
  border: 3px solid #ebebeb;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 -3px #ebebeb;
  box-shadow: inset 0 -3px #ebebeb;
  
}

.sign-up-input:focus {
  border-color: #fe8332;
  outline: none;
  -webkit-box-shadow: inset 0 -3px #fe8332;
  box-shadow: inset 0 -3px #fe8332;
}



.cajasLogin{
     position:absolute; /*El div será ubicado con relación a la pantalla*/

right:150px; /*A la izquierda deje un espacio de 0px*/
top:150px; /*Abajo deje un espacio de 0px*/
z-index:0;
float: right;
}


.slogan {
    font-family: 'Lato', sans-serif;
    color: white;
    font-size: 4em;
         position:absolute; /*El div será ubicado con relación a la pantalla*/

right:150px; /*A la izquierda deje un espacio de 0px*/
top:370px; /*Abajo deje un espacio de 0px*/
z-index:0;
float: right;

}


/*----------------------------ScrollBar-----------------------------------*/

::-webkit-scrollbar {
    width: 10px;
    margin-right: 20px;
}
 
::-webkit-scrollbar-track {
    background-color: #ebebeb;
    -webkit-border-radius: 10px;
   
}

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    background: #fe8332; 
}


/*----------------------------------------Modal-------------------------------------------*/




.modal {
  background-color: white;
  display: none;
  position: fixed;
  top: 30%;
  left: 50%;
  width: 400px;
  height: 550px;
  margin-left: -200px;
  margin-top: -150px;
  padding: 50px;
  border-radius: 5px;
  z-index: 10;
  box-shadow: 0 0 0 99999px rgba(0, 0, 0, 0.7);
  border-bottom: 7px solid #D8D8D8;
  border-right: 4px solid #D8D8D8;
}

.close-modal {
  color:  #000;
  text-decoration: none;
  float: right;
  position: absolute;
  top: 10px;
  right: 20px
}

@media (max-width : 37.500rem) {

  .modal {
  	top: 0;
  	left: 0;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 1.250rem
  }
  
  .close-modal{
    display: block;
   position: relative;
   padding: 5px 10px 20px 0
  }
  
  .modal-content{
    clear: both;
    padding-right: 1.25rem
  }
  
}


.inputRegistro {
  width: 300px;
  height: 60px;
  margin-bottom: 5px;
  padding: 0 15px 2px;
  font-size: 20px;
  background: white;
  border: 3px solid #ebebeb;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 -3px #ebebeb;
  box-shadow: inset 0 -3px #ebebeb;
  
}

.inputRegistro:focus {
  border-color: #fe8332;
  outline: none;
  -webkit-box-shadow: inset 0 -3px #fe8332;
  box-shadow: inset 0 -3px #fe8332;
}

/*---------------------------------------MODAL ERRORES CONFIRMACIÓN-------------------------------------------*/




.modal2 {
  background-color: white;
  display: none;
  position: fixed;
  top: 45%;
  left: 50%;
  width: 400px;
  height: 300px;
  margin-left: -200px;
  margin-top: -150px;
  padding: 50px;
  border-radius: 5px;
  z-index: 10;
  box-shadow: 0 0 0 99999px rgba(0, 0, 0, 0.7);
  border-bottom: 7px solid #D8D8D8;
  border-right: 4px solid #D8D8D8;
}

.close-modal2 {
  color:  #000;
  text-decoration: none;
  float: right;
  position: absolute;
  top: 10px;
  right: 20px
}

@media (max-width : 37.500rem) {

  .modal2 {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 1.250rem
  }
  
  .close-modal2{
    display: block;
   position: relative;
   padding: 5px 10px 20px 0
  }
  
  .modal-content2{
    clear: both;
    padding-right: 1.25rem
  }
  
}


.inputRegistro2 {
  width: 300px;
  height: 60px;
  margin-bottom: 5px;
  padding: 0 15px 2px;
  font-size: 20px;
  background: white;
  border: 3px solid #ebebeb;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 -3px #ebebeb;
  box-shadow: inset 0 -3px #ebebeb;
  
}

.inputRegistro2:focus {
  border-color: #fe8332;
  outline: none;
  -webkit-box-shadow: inset 0 -3px #fe8332;
  box-shadow: inset 0 -3px #fe8332;
}

/*---------------------------------------CHECK CONFIRMACIÓN-------------------------------------------*/


.checkmark {
  width: 100px;
  margin: 0 auto;
  padding-top: 40px;
}


.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
  animation: dash 2s ease-in-out;
  -webkit-animation: dash 2s ease-in-out;
}

.spin {
  animation: spin 2s;
  -webkit-animation: spin 2s;
  transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
}



@-webkit-keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }

  
  @keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }
}

     </style>
    </head>
    
   
    
    <body onload="mostrarFondo(); chequeaUrl();" data-spy="scroll" data-target=".navbar" data-offset="50"data-spy="scroll" data-target=".navbar" data-offset="50">

<!--    MENU    -->



<!--<div class="bar navbar2" style="margin-bottom: 50px;"><img style="transform: scale(0.15, 0.15); margin-top: -145px; margin-left: -350px;" src="img/logo.png" /></div>-->


<?php 


    
include('misfunciones.php');
$mysqli = conectaBBDD();
//ejemplo de volcado de una query a un array en php
//creo el array
$mascotas = array();
//hago la consulta a la BBDD
$consulta_mascotas = $mysqli->query("SELECT COUNT(*) as contador FROM mascota");

//$consulta_mascotas = $mysqli->query("SELECT COUNT(*) as contador FROM mascota m, usuario u WHERE u.id_usuario=m.id_usuario GROUP BY u.id_usuario");



//saco el numero de usuarios que hay en la bbdd
$num_mascotas = $consulta_mascotas->num_rows;
$r = $consulta_mascotas->fetch_array();
?>
  


<!-- MENU -->

<div id="centro">
    
   
    
    
<!--    <div class="menu-espanso"><a class="action-button shadow animate orange" onclick="menuInicio();">Registrar</a><a class="action-button shadow animate orange">Entrar</a>
    <div id="menu" class="menu">
    <div id="menu-in" class="menu-in"></div>
    </div>
    <span class="linee linea1"></span>
    <span class="linee linea2"></span>
    <span class="linee linea3"></span>
    <div class="voci-menu">
      <ul>
        <li><a href="#">Articolo prova</a></li>
        <li><a href="#">Testo segnaposto</a></li>
        <li><a href="#">Contatti</a></li>
        <li><a href="#">Prova test�</a></li>
        <li><a href="#">Prova testo uno</a></li>
        <li><a href="#">Prova test due</a></li>
      </ul>
    </div>
  </div>

    
    <div id="img2"><img name="fondo"></img></div>-->





<div id="cajaSup" class="inicioCajaSup">
    <a href="index.php"><img style="transform: scale(0.15, 0.15); position: absolute; left: -380px;; top: -120px;" src="img/logo.png" /></a>
        
    <div id="estrellitas" class="island_wrapper6 ocultar">
  
      <img style="transform: scale(0.7);" src="img/estrellitas.png" alt="Helpet">

</div>
    
    
    <div id="islaDia" class="island_wrapper ocultar">
  <div class="island">
      <img id="fondo1" style="transform: scale(0.7);" src="img/island.png" alt="Helpet">
  </div>
</div>
    
    <div id="islaNoche" class="island_wrapperNight ocultar">
  <div class="island">
      <img id="fondo2" style="transform: scale(0.7);" src="img/islaNoche.png" alt="Helpet">
  </div>
</div>
    
    
    <div id="nube1" class="island_wrapper1">
  <div class="island1">
      <img style="transform: scale(0.7);" src="img/nube1.png" alt="Helpet">
  </div>
</div>
    
 <div id="nube2" class="island_wrapper2">
  <div class="island2">
      <img style="transform: scale(0.7);" src="img/nube2.png" alt="Helpet">
  </div>
</div>
    
<div id="nube3" class="island_wrapper3">
  <div class="island3">
      <img style="transform: scale(0.7);" src="img/nube3.png" alt="Helpet">
  </div>
</div>
    
<!-- ---------------------------------------------------------------------------------- -->

<div id="tierra" class="island_wrapper4 ocultar">
  <div class="island4">
      <img style="transform: scale(0.7);" src="img/tierra.png" alt="Helpet">
  </div>
</div>
    
<div id="astronauta" class="island_wrapper5 ocultar">
  <div class="island5">
      <img style="transform: scale(0.7);" src="img/astronauta.png" alt="Helpet">
  </div>
</div>


    
    
    <div class="cajasLogin">
        
        <div class="inputbox">
            <form method="post">
    <input id="usuario_email" class="form-input sign-up-input" name="email" type="text" placeholder="Tu Email"><br>
    <input id="usuario_clave" class="form-input sign-up-input" name="password" type="password" placeholder="Contraseña"><br>
            </form>
            <div id="errorInicioS" style="color: red;"></div>
    </div>
        
        <a class="action-button shadow animateBtn orange" onclick="chequeaPass();">Entrar</a>
        <a class="action-button shadow animateBtn green show-modal" onclick="">Registrarme</a>
        
  
 
        
      
    </div>
    
    <div class="slogan">
        <p>Ayuda a encontrar</p>
        <div class="counter" style="float: left;" data-count="<?php echo $r['contador'];?>">0</div><p>&nbsp;mascotas.</p>
        
    </div>
    
<svg class="angled-section svg-top triangulo" preserveAspectRatio="none" viewBox="0 0 86 86" width="100%">
<polygon points="0,86 86,0 86,86" style="fill:white;">

<img class="imgTree" src="img/tree.png" />
<img class="imgJirafi" src="img/jirafi.gif" />
</polygon></svg>


  <div class="modal">
    <a class="close-modal" href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
    
    <input id="registro_email" class="inputRegistro" name="email" type="email" placeholder="Email"><br>
    <input id="registro_pass" class="inputRegistro" name="pass" type="password" placeholder="Contraseña"><br>
    <input id="registro_pass2" class="inputRegistro" name="pass" type="password" placeholder="Repita contraseña"><br>
    <input id="registro_nombre" class="inputRegistro" name="nombre" type="text" placeholder="Nombre"><br>
    <input id="registro_apellidos" class="inputRegistro" name="apellidos" type="text" placeholder="Apellidos"><br>
    <input id="registro_movil" class="inputRegistro" name="movil" type="number" placeholder="Tlf. Móvil" maxlengt="9"><br>
    <div id="errorCompletar" style="color: red;"></div>
    <a class="action-button shadow animateBtn orange" onclick="chequeaRegistro();">Registrar</a>
  </div>


 
<form action="prueba2.php" id="formulario" method="post" name="formulario" onsubmit="onEnviar()" class="hidden">
    <input id="usuario_email1" class="form-input sign-up-input" name="usuario_email1" type="text" placeholder="Tu Email"><br>
    <input id="usuario_clave1" class="form-input sign-up-input" name="usuario_clave1" type="password" placeholder="Contraseña"><br>
    <input id="enviar" type="submit" value="Enviar" class="action-button shadow animateBtn orange"/>
</form>


<!-- MODAL ERRORES -->


  <div class="modal2">
    <a class="close-modal2" href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
    <img id="cross" src="img/error.png" class="hidden" style="transform: scale(1); padding-left: 25%;">
    <div id="errorConf"></div>

            <div id="verify" class="checkmark hidden">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
        <path class="path" fill="none" stroke="#71D72B" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
          c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
          c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"/>
        <circle class="path" fill="none" stroke="#71D72B" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"/>
        <polyline class="path" fill="none" stroke="#71D72B" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8 
          74.1,108.4 48.2,86.4 "/>

        <circle class="spin" fill="none" stroke="#71D72B" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"/>

        </svg>
          
        </div>






   
  </div>    

<!-- FIN MODAL ERRORES -->
</div></div>
    
<div id="err" class="hidden"><?php echo $_err; ?></div>
<div id="email" class="hidden"><?php echo $_email; ?></div>



    
    </body>
    <!--<script src="js/masonry.pkgd.min.js"></script>-->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!--<script src="js/jquery.form-validator.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>



    <script>



            function onEnviar(){
              var _usuario_email = $('#usuario_email1').val();
                var _usuario_clave = $('#usuario_clave1').val();
              
              document.getElementById("usuario_email1").value=_usuario_email;
              document.getElementById("usuario_clave1").value=_usuario_clave;
            }

            function chequeaPass() {
                var _usuario_email = $('#usuario_email').val();
                var _usuario_clave = $('#usuario_clave').val();
                console.log(_usuario_email);
                console.log(_usuario_clave);
                document.getElementById('errorInicioS').innerHTML='';
                
                
                if (_usuario_email !== "" && _usuario_clave !== ""){
                    if( validar_email( _usuario_email ) || _usuario_email === "admin" ){
    
                  // $.ajax({
                  //     type: 'POST',
                  //     url: 'login.php',
                  //     dataType: 'html',
                  //     data: {
                  //         'usuario_email' : _usuario_email,
                  //         'usuario_clave' : _usuario_clave
                  //     },
                  //     success: function(data) {
                  //       window.open("login.php",'_self');
                  //           alert('success!');
                  //   }
                  // });

                  // var _usuario_email = $('#usuario_email').val();
                  // var _usuario_clave = $('#usuario_clave').val();
                
                  // document.getElementById("usuario_email").value=_usuario_email;
                  // document.getElementById("usuario_clave").value=_usuario_clave;
                     // ///////////////////////////////////////////////////////////////////////////////////
                   document.cookie ='usuario_email='+_usuario_email;
                   document.cookie ='usuario_clave='+_usuario_clave;
                   window.open("login.php",'_self');
                   

                
                }else{
                  document.getElementById('errorInicioS').innerHTML='*Debes poner un email válido';
                }
                }else{
                  document.getElementById('errorInicioS').innerHTML='*Debes rellenar todos los datos';
                }
            };


            function chequeaUrl() {
                
                var _err = document.getElementById("err").innerHTML;
                var _email = document.getElementById("email").innerHTML;
                console.log(_err);
                var modal = $('.modal2');
                var verify = $('#verify');
                var cross = $('#cross');

                if (_err !== "" || _err !== null){
                    if( _err === '1' ){
    
                   document.getElementById('errorInicioS').innerHTML='*La contraseña es incorrecta';

                }else if( _err === '0' ){

                  document.getElementById('errorInicioS').innerHTML='*Debes validar el correo electrónico';
                }else if( _err === '2' ){

                  document.getElementById('errorInicioS').innerHTML='*El email que has introducido no existe';
                }else if( _err === '3' ){
                  modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Error inesperado, pide una nueva ruta de validación</span>';
                }else if( _err === '4' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Error, no son correctos los valores de los parámetros, prueba de nuevo</span>';
                }else if( _err === '5' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Error, no existe usuario, registrate de nuevo</span>';
                }else if( _err === '6' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Error de validación, ya está validado</span>';
                }else if( _err === '7' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Error, no se ha confirmado correctamente, contacte con soporte</span>';
                }else if( _err === 'ok' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  cross.addClass('hidden');
                  verify.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: orange;">Bienvenid@, has confirmado tu email correctamente, ahora entre con su usuario y contraseña :)</span>';
                }else if( _err === 'confirmar'){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  cross.addClass('hidden');
                  verify.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: orange;">Perfecto, ya solo queda un último paso, te hemos enviado un correo de confirmación al email <b>'+_email+'</b></span>';
                }else if( _err === '8' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Ha ocurrido un error, intenta registrarte de nuevo</span>';
                }else if( _err === '9' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Ha ocurrido un error, intenta registrarte de nuevo</span>';
                }else if( _err === '10' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Este email ya existe, intentelo de nuevo con un nuevo email</span>';
                }else if( _err === '11' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Ha ocurrido un error, intenta registrarte de nuevo</span>';
                }else if( _err === '12' ){
                   modal.fadeIn();
                  $('.close-modal2').on('click', function() {
                  modal.fadeOut();
                  });
                  verify.addClass('hidden');
                  cross.removeClass('hidden');
                  document.getElementById('errorConf').innerHTML='<span style="color: red;">*Este email ya existe, intentalo de nuevo con un nuevo email</span>';
                }



              }else{
                  document.getElementById('errorInicioS').innerHTML='*Error, recarga la página y prueba de nuevo';
              }
            };
            
            
          
          
  function validar_email( email ) 
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}        
          
            
  function chequeaRegistro() {
 
    var _nombre = $('#registro_nombre').val();
    var _apellidos = $('#registro_apellidos').val();
    var _pass = $('#registro_pass').val();
    var _pass2 = $('#registro_pass2').val();
    var _email = $('#registro_email').val();
    var _movil = $('#registro_movil').val();
    
    if (_nombre !== "" && _apellidos !== "" && _pass !== "" && _pass2 !== "" && _email !== "" && _movil !== ""){
   //borrar documents en cada vuelta
   if (/^\d{9}$/.test(_movil)){
    if (_pass === _pass2){
        if( validar_email( _email ) ){

                  document.cookie ='registro_nombre='+_nombre;
                  document.cookie ='registro_apellidos='+_apellidos;
                  document.cookie ='registro_pass='+_pass;
                  document.cookie ='registro_email='+_email;
                  document.cookie ='registro_movil='+_movil;
                  window.open("registro.php",'_self');

    }else{
        document.getElementById('errorCompletar').innerHTML='*Debe ser un email válido';
    }
    }else{
        document.getElementById('errorCompletar').innerHTML='*Deben coincidir las contraseñas';
    }
    }else{
        document.getElementById('errorCompletar').innerHTML='*Deben ser nueve números';
    }
    }else{
        document.getElementById('errorCompletar').innerHTML='*Debes rellenar todos los campos';
    }
    };

    
//    $('.menu , .linee').on('click', function() {
//  $('.menu-in').toggleClass('over');
//  $('.linea1').toggleClass('overL1');
//  $('.linea2').toggleClass('overL2');
//  $('.linea3').toggleClass('overL3');
//  $('.voci-menu').toggleClass('overvoci');
//});
//
//


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

            
function mostrarFondo(){
var cajaSup = $('#cajaSup');
var nube1 = $('#nube1');
var nube2 = $('#nube2');
var nube3 = $('#nube3');
var islaDia = $('#islaDia');
var islaNoche = $('#islaNoche');
var tierra = $('#tierra');
var astronauta = $('#astronauta');
var estrellitas = $('#estrellitas');

ahora=new Date(); 
hora=ahora.getHours();

if(hora >8 && hora <20){
cajaSup.removeClass('fondoNoche');
//islaNoche.addClass('ocultar');
islaDia.removeClass('ocultar');
//imagen1="img/island.png";
cajaSup.addClass('fondoDia');
nube1.removeClass('ocultar');
nube2.removeClass('ocultar');
nube3.removeClass('ocultar');
//tierra.addClass('ocultar');
//astronauta.addClass('ocultar');
}else{
cajaSup.removeClass('fondoDia');
//islaDia.addClass('ocultar');
islaNoche.removeClass('ocultar');
//imagen2="img/islaNoche.png";
cajaSup.addClass('fondoNoche');
nube1.addClass('ocultar');
nube2.addClass('ocultar');
nube3.addClass('ocultar');
tierra.removeClass('ocultar');
astronauta.removeClass('ocultar');
estrellitas.removeClass('ocultar');
}

//document.images["fondo1"].src=imagen1;
//document.images["fondo2"].src=imagen2;

};

function openLightBox(){
  var modal = $('.modal');
$('.show-modal').on('click', function() {
 modal.fadeIn();
});

$('.close-modal').on('click', function() {
 modal.fadeOut();
});
};
openLightBox();

    </script>
</html>
