<!DOCTYPE html>
<?php include ("seguridad.php");
?>
<html>
<head>
<title>Ayuda a encontrar | Helpet</title>
<meta charset="UTF-8">
<meta name="description" content="Ayuda a encontrar, recuperar y adoptar mascotas"/>
<meta name="keywords" content="encontrar mi mascota, recuperar mi mascota, adoptar una mascota, poner en adopción mi mascota"/>
<meta name="author" content="Alejandro Mallon Buitrago" />
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style type="text/css">
	

/* 
* Art by @jofpin 
* 2014
*/
body {
  background: #f8f5f0;
  font-family: 'Lato', sans-serif;
  overflow-x: hidden;
}
a {
  text-decoration: none;
  color: #3498db;
}
.content-profile-page {

  width: 100%;
}

.card {
  background: #fff;
  border-radius: 0.3rem;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  border: .1em solid rgba(0, 0, 0, 0.2);
  margin-bottom: 1em; 

}

.profile-user-page .img-user-profile {
	margin: 0 auto;
  text-align: center; 
}
.profile-user-page .img-user-profile .profile-bgHome {
	border-bottom: .2em solid #f5f5f5;
  width: 100%;
  height: 16em;
  }
.profile-user-page .img-user-profile .avatar {
	margin: 0 auto;
  background: #fff;
  width: 7em;
  height: 7em;
  padding: 0.25em;
  border-radius: 100em;
  margin-top: -5em;
  box-shadow: 0 0 .1em rgba(0, 0, 0, 0.35);
}
.profile-user-page button {
	position: absolute;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  width: 7em; 
  background: #3498db;
  border: 1px solid #2487c9;
  color: #fff;
  outline: none;
  border-radius: 0 .6em .6em 0;
  padding: .80em;
}

.profile-user-page button:hover {
  background: #51a7e0;
  transition: background .2s ease-in-out;
  border: 1px solid #2487c9;
}
.profile-user-page .user-profile-data, .profile-user-page .description-profile {
  text-align: center;
  padding: 0 1.5em; 
}
.profile-user-page .user-profile-data h1 {
  font-family: 'Lato', sans-serif;
  margin-top: 0.35em;
  color: #292f33;
  margin-bottom: 0; 
}
.profile-user-page .user-profile-data p {
	font-family: "Lato", sans-serif;
  color: #8899a6; 
  font-size: 1.1em;
  margin-top: 0;
  margin-bottom: 0.5em; 
}
.profile-user-page .description-profile {
  color: #75787b;
  font-size: 0.98em; 
    padding-bottom: 60px;
}
.profile-user-page .data-user {
	font-family: "Quicksand", sans-serif;
  margin-bottom: 0;
  cursor: pointer;
  padding: 0;
  list-style: none;
  display: table;
  width: 100.15%; 
}
.profile-user-page .data-user li {
  margin: 0;
  padding: 0;
  width: 33.33334%;
  display: table-cell;
  text-align: center;
  border-left: 0.1em solid transparent; 
}
.profile-user-page .data-user li:first-child {
  border-left: 0; 
}
.profile-user-page .data-user li:first-child a {
  border-bottom-left-radius: 0.3rem; 
  }
.profile-user-page .data-user li:last-child a {
  border-bottom-right-radius: 0.3rem; 
}
.profile-user-page .data-user li a, .profile-user-page .data-user li strong {
  display: block; 
}
.profile-user-page .data-user li a {
  background-color: #f7f7f7;
  border-top: 1px solid rgba(242,242,242,0.5);
  border-bottom: .2em solid #f7f7f7;
  box-shadow: inset 0 1px 0 rgba(255,255,255,0.4),0 1px 1px rgba(255,255,255,0.4);
  padding: .93em 0;
  color: #46494c; 
}
.profile-user-page .data-user li a strong, .profile-user-page .data-user li a span {
  font-weight: 600;
  line-height: 1; 
}
.profile-user-page .data-user li a strong {
  font-size: 2em; 
}
.profile-user-page .data-user li a span {
  color: #717a7e; 
}
.profile-user-page .data-user li a:hover {
  background: rgba(0, 0, 0, 0.05);
  border-bottom: .2em solid #3498db;
  color: #3498db; 
}
.profile-user-page .data-user li a:hover span {
  color: #3498db; 
}

footer h4 {
  display: block;
  text-align: center;
  clear: both;
  font-family: "Coda", sans-serif;
  color: #566965;
  line-height: 6;
  font-size: 1em;
}
footer h4 a {
  text-decoration: none;
  color: #3498db;
}


/* ----------------------------------------------------------- */

/*__________________________Cajas Animales_____________________________*/


#cajas{
   
    margin-left: 2%;
    margin-top: 2%;
    background-color: white;
    border-radius: 12px 12px 12px 12px;
    width: 250px;
    float: left;
/*    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26);*/
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.1), 0 2px 5px 0 transparent;
/*    display: block;
    overflow: hidden;
    position: static;*/
    font-size: 0.7rem;
    line-height: 0.8rem;
   
    
/*    display: inline-block;
    break-inside: avoid;*/

}

#cajas2{
   
    height: 100px;
    background-color: white;
    padding: 1rem .7rem;
    transition: all .25s ease;
}

#cajas3{
   
    height: 54px;
    background-color: white;
    border-radius: 0px 0px 12px 12px;
    border: 1px solid #f1f1f1;
    padding-left: 10px;
    padding-bottom: 70px;
}

#cajas3:hover {
    
    background-color: #f6f6f6;
    cursor: pointer;
    border-color: #f1f1f1;
}

/*-------------------------MASONRY----------------------------*/

/* * { box-sizing: border-box; }

body { font-family: sans-serif; }*/

/* ---- grid ---- */

.grid {
  max-width: 100%;
  padding-left: 5%;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item {

  float: left;
  margin-bottom: 15px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 200px;
    border-radius: 12px 12px 12px 12px;
  font-size: 0.7rem;
  line-height: 0.8rem;

}

.grid-item:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.hvr-float:hover,
.hvr-float:focus,
.hvr-float:active {
  transform: translateY(-8px);
}


</style>

</head>
<body>

<?php 

$id = $_GET['i'];

include('misfunciones.php');
$mysqli = conectaBBDD();

$resultado_consulta = $mysqli->query("SELECT * FROM usuario WHERE id_usuario = '$id'");
$numero_usuario = $resultado_consulta->num_rows;

  $r = $resultado_consulta->fetch_array();
  $email = $r['email'];
  $tipo = $r['tipo'];
  $nombre = $r['nombre'];
  $apellidos = $r['apellidos'];
  $movil = $r['movil'];
  $datetime_alta = $r['datetime_alta'];
  $foto = $r['foto'];

  // ///////////////////////CONTADORES MASCOTAS PROPIETARIO///////////////////////

  $perdido = array();
$consulta_perdido = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Perdido' AND id_usuario = '$id'");
$num_perdido = $consulta_perdido->num_rows;
$p = $consulta_perdido->fetch_array();

/////////////////////

$encontrado = array();
$consulta_encontrado = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Encontrado' AND id_usuario = '$id'");
$num_encontrado = $consulta_encontrado->num_rows;
$e = $consulta_encontrado->fetch_array();

////////////////////

$adopcion = array();
$consulta_adopcion = $mysqli->query("SELECT COUNT(*) as contador FROM mascota WHERE estado = 'Adopcion' AND id_usuario = '$id'");
$num_adopcion = $consulta_adopcion->num_rows;
$adn = $consulta_adopcion->fetch_array();

?>



<!-- -----------------------------MENÚ------------------------------ -->

<!-- Dropdown Structure -->

<nav style="position: fixed; z-index: 5; background-color: #8ccef1;  box-shadow: 0 2px 6px 0 rgba(0,0,0,0.2); margin-top: -10px;">
  <div class="nav-wrapper">
    <a href="ventana.php" class="brand-logo"><img style="transform: scale(0.15, 0.15); position: absolute; left: -380px;; top: -140px;" src="img/logo.png" /></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="ventana.php">Inicio</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
      <!-- Dropdown Trigger -->
      <li><a style="padding-left: 70px; padding-right: 70px;" class="dropdown-button" href="#!" data-activates="dropdown1">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<ul id="dropdown1" class="dropdown-content" style="margin-top: 65px; margin-right: 10px;">
  <li><a href="#!">Hola, <?php print($_SESSION['nombre']); ?> <?php  echo '<img style="border-radius: 100%; width: 50px;  vertical-align: middle; margin-left: 15px;" src="'.$foto.'" alt="helpet | '.$nombre.', '.$apellidos.'"/>'; ?></a></li>
  <li><a href="#!" onclick="cogeIdMi(<?php print($_SESSION['id_usuario']); ?>)">Mi perfil</a></li>
  <li class="divider"></li>
  <li><a onclick="cargaCentroPrincipal(<?php print($_SESSION['id_usuario']); ?>);">Configuración</a></li>
</ul>

<div id="centroPrincipal">

<!-- -----------------------------Perfil------------------------------ -->

<div class="content-profile-page">
   <div class="profile-user-page card">
      <div class="img-user-profile" style="margin-top: 50px;">
    
        <iframe class="profile-bgHome" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194348.13981549095!2d-3.819622113741848!3d40.4378697577587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422997800a3c81%3A0xc436dec1618c2269!2sMadrid!5e0!3m2!1ses!2ses!4v1496396572917" width="2000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>


        <?php 


            // fecha_a es la primera fecha
            $fecha_a= $datetime_alta;
            // fecha_b en este caso es la fecha actual
            $fecha_b= date("Y/m/d");

            function dias_transcurridos($fecha_i,$fecha_f)
            {
            $dias = (strtotime($fecha_i)-strtotime($fecha_f))/86400;
            $dias = abs($dias); $dias = floor($dias);
            return $dias;
            }
            ?>


        <?php  echo '<img class="avatar" src="'.$foto.'" alt="helpet | '.$nombre.', '.$apellidos.'"/>'; ?>
           </div>
          <button>Follow</button>
          <div class="user-profile-data">
            <h1><?php echo $nombre; ?></h1>
            <p style="margin-top: 10px;"><?php echo $email; ?></p>
          </div> 
          <div class="description-profile"><?php echo $movil.' | '.dias_transcurridos($fecha_a,$fecha_b).' días de antigüedad' // Si no poner fecha de alta  ?></div>
       <ul class="data-user">
        <li><a onclick="cargaCentro('1', <?php print($id); ?>)"><strong><?php echo $p['contador'];?></strong><span>Perdidos</span></a></li>
        <li><a onclick="cargaCentro('2', <?php print($id); ?>)"><strong><?php echo $e['contador'];?></strong><span>Encontrados</span></a></li>
        <li><a onclick="cargaCentro('3', <?php print($id); ?>)"><strong><?php echo $adn['contador'];?></strong><span>Adopción</span></a></li>
       </ul>

        <div id="cargaMascotas"></div>

      </div>
    </div>


</div>



</body>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript">
	$('.counter2').each(function() {
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


$(".dropdown-button").dropdown();


  function cargaCentro(tipo, id) {

              var _id_usuario = id;
              var _tipo = tipo;

              // console.log(_id_usuario);
              // console.log(_tipo);

                $('#cargaMascotas').load("cargaMascotas.php", {
                    id_usuario: _id_usuario,
                    tipo: _tipo
                });

      }    

function cargaCentroPrincipal(id) {

              var _id_usuario = id;


              // console.log(_id_usuario);
              // console.log(_tipo);

                $('#centroPrincipal').load("miConfiguracion.php", {
                    id_usuario: _id_usuario
                });

      } 


     function cogeId(id) {
                var _id_usuario = id;
                console.log(_id_usuario);

                window.location = ("ventanaPropietario.php?i="+_id_usuario+"");

                };

    function cogeIdMi(id) {
                var _id_usuario = id;
                console.log(_id_usuario);

                window.location = ("miPerfil.php?i="+_id_usuario+"");

                };

  $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 220
  });

</script>
</html>