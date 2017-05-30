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



@session_start();
if (!isset($_SESSION['email'])){
   session_destroy();
}


if (isset($_GET['i']) && isset($_GET['c'])){
$_id = $_GET['i'];
$_clave = $_GET['c'];
//echo 'La id es: '.$_id.' y la clave es: '.$_clave;

  $comprueba_claveAndId = $mysqli -> 
            query("SELECT * FROM usuario WHERE id_usuario = '$_id' AND clave_validacion = '$_clave' ;"); 
            //echo "hola! :)";
            // Comprobamos que existe la coincidencia id y clave
    if ($mysqli->affected_rows == 1){
    	//echo 'Existe un usuario con esa id y con esa clave';
    	$comprueba_validacion = $mysqli -> 
            query("SELECT validado FROM usuario WHERE id_usuario = '$_id' ;");
            // Comprobamos que el user no está ya validado
    if ($mysqli->affected_rows == 1){
    	//echo 'Existe un usuario para comprovación de valided';
   	$r = $comprueba_validacion->fetch_array();
    $validacion = $r['validado'];
    if( $validacion === '0'){
    	//echo 'Existe un usuario NO validado';

    	$modificar_confirmacion = $mysqli -> 
            query("UPDATE `usuario` SET `validado` = '1' WHERE `usuario`.`id_usuario` = '$_id';");
            // modificamos el campo validado, para ponerlo a 1, y así saber que está validado
        if ($mysqli->affected_rows == 1){
        	//echo 'Confirmada correctamente';
        	header("location:inicioSesion.php?err=ok"); // su cuenta ha sido confirmada correctamente

        }else{
        	header("location:inicioSesion.php?err=7"); // no se ha confirmado correctamente
        	//echo 'no se ha confirmado correctamente';
        }

    }else{
    	header("location:inicioSesion.php?err=6"); // error de validación, ya está validado
    	//echo 'error de validación, ya está validado';
    }
}else{
	header("location:inicioSesion.php?err=5"); // error inesperado, no devuelve valor la consulta
	//echo 'error inesperado, no devuelve valor la consulta';
}
 }else{
 	header("location:inicioSesion.php?err=4"); // no son correctos los valores de los parámetros
 	//echo 'no son correctos los valores de los parámetros';
 }
}else{
	header("location:inicioSesion.php?err=3"); // error inesperado (Faltan parametros GET), pide una nueva ruta de validación
	//echo 'error inesperado (Faltan parametros GET), pide una nueva ruta de validación';
}
?>


</body>
</html>
