<?php include ("seguridad.php");

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


   // ////////////////////////////////////////////////////////////////////////////////

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