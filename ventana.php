<!DOCTYPE html>
<?php session_start(); ?>
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
        margin-top: 5%;
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
    cursor: pointer;
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
  margin-bottom: 10px;
  border-radius: 12px 12px 12px 12px;
  width: 200px;
  box-shadow: 0 5px 10px 0 rgba(0,0,0,.1), 0 1px 1px 0 transparent;
  font-size: 0.7rem;
  line-height: 0.8rem;

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


</style>

</head>
<body>




<button><a href="logout.php">Cerrar Sesión</a></button>


<?php

$_SESSION['email'];
print($_SESSION['email']);

include ("seguridad.php");

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

echo '<div class="grid">';
for ($i = 0; $i < $num_usuarios; $i++) {

echo '<div class="grid-item" class="hvr-float"><img src="img/'. $usuarios[$i][5] .'.jpg" style="width:100%; border-radius: 12px 12px 0px 0px;"/>';
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
    <li><a class="btn-floating red ampliado" href="#modal1">Perdida</a></li>
    <li><a class="btn-floating blue ampliado">Encontrada</a></li>
    <li><a class="btn-floating yellow ampliado">Adopción</a></li>
  </ul>
</div>

<!-- -------------------------------MODALES------------------------ -->

  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
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
  columnWidth: 210
  });

</script>
</html>