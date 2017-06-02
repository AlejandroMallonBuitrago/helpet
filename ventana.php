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


<style>
    
    
    body {
        background-image: none;
        background-color: white /* #f6f6f6 */;
        transition: 1s;
        font-family: 'Lato', sans-serif;
    }


    
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

/*-------------------------Fixed Button----------------------------*/


.btn {
  margin: 10px 10px;
}

.fab {
  margin: 10px 10px;
}

.fab-menu {
  bottom: 45px;
  right: 24px;
}

.ampliado{
  width: 80px;
  right: 12px;
}

/*-------------------------MODALES----------------------------*/





.modal2 {
  background-color: white;
  display: none;
  position: fixed;
  top: 30%;
  left: 46%;
  width: 500px;
  height: 600px;
  margin-left: -200px;
  margin-top: -150px;
  padding: 50px;
  border-radius: 5px;
  z-index: 10;
  box-shadow: 0 0 0 99999px rgba(0, 0, 0, 0.7);
  border-bottom: 7px solid #D8D8D8;
  border-right: 4px solid #D8D8D8;
  overflow: auto;
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



</style>

</head>
<body>


<!-- Dropdown Structure -->

<nav style="position: fixed; z-index: 5; background-color: #8ccef1;  box-shadow: 0 2px 6px 0 rgba(0,0,0,0.2);">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img style="transform: scale(0.15, 0.15); position: absolute; left: -380px;; top: -140px;" src="img/logo.png" /></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="ventana.php">Inicio</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
      <!-- Dropdown Trigger -->
      <li><a style="padding-left: 70px; padding-right: 70px;" class="dropdown-button" href="#!" data-activates="dropdown1">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<ul id="dropdown1" class="dropdown-content" style="margin-top: 65px; margin-right: 10px;">
  <li><a href="#!">Hola, <?php print($_SESSION['nombre']); ?></a></li>
  <li><a href="#!" onclick="cogeId(<?php print($_SESSION['id_usuario']); ?>)">Mi perfil</a></li>
  <li class="divider"></li>
  <li><a href="#!">Configuración</a></li>
</ul>



<?php

$_SESSION['email'];
$_SESSION['nombre'];
print($_SESSION['email']);


include('misfunciones.php');
$mysqli = conectaBBDD();
//ejemplo de volcado de una query a un array en php
//creo el array
$usuarios = array();
$usuarios2 = array();
//hago la consulta a la BBDD
$consulta_usuarios = $mysqli->query("SELECT foto_mascota, usuario.id_usuario, recompensa, nombre_mascota, nombre, ubicacion, foto_mascota FROM mascota, usuario WHERE mascota.id_usuario = usuario.id_usuario ORDER BY fecha DESC");

//$consulta_mascotas = $mysqli->query("SELECT COUNT(*) as contador FROM mascota m, usuario u WHERE u.id_usuario=m.id_usuario GROUP BY u.id_usuario");



//saco el numero de usuarios que hay en la bbdd
$num_usuarios = $consulta_usuarios->num_rows;

for ($i = 0; $i < $num_usuarios; $i++) {
    $r = $consulta_usuarios->fetch_array();
//    $a = $consulta_mascotas->fetch_array();
    $usuarios[$i][0] = $r['id_usuario'];
    $usuarios[$i][1] = $r['recompensa'];
    $usuarios[$i][2] = $r['nombre_mascota'];
    $usuarios[$i][3] = $r['nombre'];
    $usuarios[$i][4] = $r['ubicacion'];
    $usuarios[$i][5] = $r['foto_mascota'];
    $id_usuario = $usuarios[$i][0];
    $consulta_count = $mysqli->query("SELECT COUNT(*) AS Contador from mascota WHERE id_usuario = $id_usuario");
  
        $rr = $consulta_count->fetch_array();
        $usuarios2[$i][0] = $rr['Contador'];
    
   }
?>

<table id="recargar" class="table table-striped">
<?php

// for ($i = 0; $i < $num_usuarios; $i++) {
   
// echo '<div id="cajas">';
// echo '<div id="cajas1">';
// echo '<img src="img/'. $usuarios[$i][5] .'.jpg" style="width:100%; border-radius: 12px 12px 0px 0px;"/>';
// echo ' </div>';
// echo ' <div id="cajas2">';
// echo '     <p class="color1">Recompensa:'  . $usuarios[$i][1] . '</p>';
// echo '     <p>' . $usuarios[$i][2] . '</p>';
// echo '     <p class="color2">' . $usuarios[$i][4] . '</p>';
// echo ' </div>';
// echo ' <div id="cajas3" onclick="cogeId('.$usuarios[$i][0].')">';
// echo '     <img />';
// echo '     <p>' . $usuarios[$i][3] . '</p>';    

// echo '     <p>'. $usuarios2[$i][0] .' Mascotas</p>';


// echo ' </div>';
// echo '</div>';
// }
//echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

echo '<div class="grid" style="margin-top: 10%;">';
for ($i = 0; $i < $num_usuarios; $i++) {

echo '<div class="grid-item hvr-float"><img src="img/'. $usuarios[$i][5] .'.jpg" style="width:100%; border-radius: 12px 12px 0px 0px;"/>';
echo ' <div id="cajas2">';
echo '     <p class="color1">Recompensa: '  . $usuarios[$i][1] . '€</p>';
echo '     <p>' . $usuarios[$i][2] . '</p>';
echo '     <p class="color2">' . $usuarios[$i][4] . '</p>';
echo ' </div>';
echo ' <div id="cajas3" onclick="cogeId('.$usuarios[$i][0].')">';
echo '     <img />';
echo '     <p>' . $usuarios[$i][3] . '</p>';    

echo '     <p>'. $usuarios2[$i][0] .' Mascotas</p>';


echo ' </div></div>';

}
echo '</div>';


//echo "user Id: " . $r['recompensa'];

?>

    <!-- -------------------------------ADD BUTTON------------------------ -->

    <div class="fixed-action-btn horiontal click-to-toggle fab-menu">
  <a class="btn-floating btn-large orange">
    <i class="large mdi-navigation-menu material-icons">add</i>
  </a>
  <ul>
    <li><a class="btn-floating red ampliado show-modal2">Perdida</a></li>
    <li><a class="btn-floating blue ampliado">Encontrada</a></li>
    <li><a class="btn-floating yellow ampliado">Adopción</a></li>
  </ul>
</div>

<!-- -------------------------------MODALES------------------------ -->



  <div class="modal2">
    <a class="close-modal2 fixed" href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true">x</span></a>
    <p style="text-align: center;">Esta comunidad está aquí para ayudarte 💪 ¡Vamos a encontrarlo! 👀🕵️🔍</p>

  <div class="row">
    <form>


              <div class="input-field col s12">
                  <input id="nombre_mascota" type="text" class="validate">
                  <label for="nombre_mascota" data-error="wrong" data-success="right">Nombre mascota</label>
              </div>
            
              <div class="input-field col s12">

              <select>
                <option value="" disabled selected>Elige la mascota</option>
                <option value="1">Perro</option>
                <option value="2">Gato</option>
                <option value="3">Roedor</option>
                <option value="4">Pajaro</option>
              </select>
              <label>Tipo de mascota</label>
              </div>

              <div class="input-field col s12">
                <input id="raza" type="text" class="validate">
                <label for="raza" data-error="wrong" data-success="right">Raza</label>
              </div>

              <div class="input-field col s12">
                <input id="pelaje" type="text" class="validate">
                <label for="pelaje" data-error="wrong" data-success="right">Pelaje</label>
              </div>

              <div class="input-field col s12">
              Fecha que se perdió
              <input type="date" class="datepicker">
              </div>

              <div class="input-field col s12">
                <input id="recompensa" type="text" class="validate">
                <label for="recompensa" data-error="wrong" data-success="right">Recompensa</label>
              </div>

              <div class="input-field col s12">
                <input id="provincia" type="text" class="validate">
                <label for="provincia" data-error="wrong" data-success="right">Provincia</label>
              </div>


              <div class="input-field col s12">
                <input id="ciudad" type="text" class="validate">
                <label for="ciudad" data-error="wrong" data-success="right">Ciudad</label>
              </div>


              <div class="input-field col s12">
                <input id="codigo postal" type="text" class="validate">
                <label for="codigo postal" data-error="wrong" data-success="right">Código postal</label>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                  <label for="textarea1">Textarea</label>
                </div>
              </div>




    </form>
  </div>
        


   <div id="errorConf"></div>
  </div>    



    </body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript">
  
   function cogeId(id) {
                var _id_usuario = id;
                console.log(_id_usuario);

                window.open("ventanaPropietario.php?i="+_id_usuario+"");

                };

  $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 220
  });

function openLightBox(){
  var modal = $('.modal2');
$('.show-modal2').on('click', function() {
 modal.fadeIn();
});

$('.close-modal2').on('click', function() {
 modal.fadeOut();
});
};
openLightBox();


  $(document).ready(function() {
    $('select').material_select();
  });
            

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 1 // Creates a dropdown of 15 years to control year
  });


$(".dropdown-button").dropdown();

</script>
</html>