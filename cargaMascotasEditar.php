<?php include ("seguridad.php");

include('misfunciones.php');
$mysqli = conectaBBDD();


if (isset($_POST['tipo']) && isset($_POST['id_usuario'])){
$_tipo = $_POST['tipo'];
$_id = $_POST['id_usuario'];

$_estado = "";

if ($_tipo === '1'){
  $_estado = "Perdido";
}else if($_tipo === '2'){
$_estado = "Encontrado";
}else if($_tipo === '3'){
$_estado = "Adopcion";
}



//ejemplo de volcado de una query a un array en php
//creo el array

//ejemplo de volcado de una query a un array en php
//creo el array
$usuarios = array();
//hago la consulta a la BBDD
$consulta_usuarios = $mysqli->query("SELECT * FROM mascota WHERE id_usuario = '$_id' AND estado = '$_estado' ORDER BY fecha DESC");

//$consulta_mascotas = $mysqli->query("SELECT COUNT(*) as contador FROM mascota m, usuario u WHERE u.id_usuario=m.id_usuario GROUP BY u.id_usuario");



//saco el numero de usuarios que hay en la bbdd
$num_usuarios = $consulta_usuarios->num_rows;

for ($i = 0; $i < $num_usuarios; $i++) {
    $r = $consulta_usuarios->fetch_array();
//    $a = $consulta_mascotas->fetch_array();
    $usuarios[$i][1] = $r['recompensa'];
    $usuarios[$i][2] = $r['nombre_mascota'];
    $usuarios[$i][4] = $r['ubicacion'];
    $usuarios[$i][5] = $r['foto_mascota'];
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
echo ' <div id="cajas3">';
echo '<button>Editar</button>';    

echo '</div></div>';

}
echo '</div>';


//echo "user Id: " . $r['recompensa'];

}


?>