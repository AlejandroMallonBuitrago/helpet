<!DOCTYPE html>
<html>
<head>
<title>Ayuda a encontrar | Helpet</title>
<meta charset="UTF-8">
<meta name="description" content="Ayuda a encontrar, recuperar y adoptar mascotas"/>
<meta name="keywords" content="encontrar mi mascota, recuperar mi mascota, adoptar una mascota, poner en adopción mi mascota"/>
<meta name="author" content="Alejandro Mallon Buitrago" />
</head>
<body>


<?php
    include('misfunciones.php');
    $mysqli = conectaBBDD();

    session_start();
    $id = $_SESSION['id_usuario'];
               
    $nombreMascota = $_COOKIE['nombre_mascota'];
    $tipoMascota = $_COOKIE['tipo_mascota'];
    $raza = $_COOKIE['raza'];
    $pelaje = $_COOKIE['pelaje'];
    $fecha = $_COOKIE['fecha'];
    $recompensa = $_COOKIE['recompensa'];
    $provincia = $_COOKIE['provincia'];
    $ciudad = $_COOKIE['ciudad'];
    $codigoPostal = $_COOKIE['codigo_postal'];
    $descripcion = $_COOKIE['descripcion'];
    $estado = $_COOKIE['estado'];

/*echo $nombreMascota;
echo $tipoMascota;
echo $raza;
echo $pelaje;
echo $fecha;
echo $recompensa;
echo $provincia;
echo $ciudad;
echo $codigoPostal;
echo $descripcion;
echo $estado;*/

    
 // coge imagen aleatoria y la pone
        $carpeta="img_pet/";
 
# definimos un array que contendra todas las imagenes de la carpeta
$imagenes=array();
 
// devuelve el tipo mime de su extensión
$finfo = finfo_open(FILEINFO_MIME_TYPE);
 
// recorremos toda la carpeta para buscar los archivos
foreach (glob($carpeta."*") as $filename) {
    $mime=finfo_file($finfo, $filename);
    if($mime=="image/jpeg" || $mime=="image/pjpeg" || $mime=="image/gif" || $mime=="image/png" || $mime=="image/jpg")
    {
        # guardamos las imagenes en un array
        $imagenes[]=$filename;
    }
}
 
finfo_close($finfo);
 
# buscamos un numero aleatorio entre la cantidad de imagenes encontradas
$aleatorio=rand(0,count($imagenes)-1);
 
# mostramos dicha imagen
//echo '<img src="'.$imagenes[$aleatorio].'">';



    $inserta_mascota = $mysqli -> 
            query("INSERT INTO `mascota` (`id`, `id_usuario`, `nombre_mascota`, `tipo_mascota`, `raza`, `pelaje`, `sexo`, `señas`, `descripcion`, `ubicacion`, `fecha`, `recompensa`, `foto_mascota`, `provincia`, `ciudad`, `codigoPostal`, `estado`) VALUES (NULL, '$id', '$nombreMascota', '$tipoMascota', '$raza', '$pelaje', '', '', '$descripcion', '', '$fecha', '$recompensa', '$imagenes[$aleatorio]', '$provincia', '$ciudad', '$codigoPostal', '$estado');");
            
    if ($mysqli->affected_rows == 1){

        
        
       
header("location:ventana.php?err=ok");
            

            
}else {
     header("location:ventana.php?err=1"); // Ha ocurrido un error, intenta subirlo de nuevo
};


    
  
    
    ?>

</body>
</html>