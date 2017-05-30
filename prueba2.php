<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
   <title>Test Page</title>
   <style>
   
   * { box-sizing: border-box; }

body { font-family: sans-serif; }

/* ---- grid ---- */

.grid {
  max-width: 1200px;
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
  width: 160px;
  float: left;
  background: #D26;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.5);
  border-radius: 5px;
  margin-bottom: 5px;

}
   
   </style>
   </head>
   
   <body>
   <?php
session_start();
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
<?php
echo '<div class="grid">';
for ($i = 0; $i < $num_usuarios; $i++) {

echo '<div class="grid-item"><img src="img/'. $usuarios[$i][5] .'.jpg" style="width:100%; border-radius: 12px 12px 0px 0px;"/></div>';

}
echo '</div>';

?>

   </body>
   
   <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
   <script>
    // external js: masonry.pkgd.js

$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 170
});

   </script>




</html>