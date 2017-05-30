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
               
    $nombre = $_COOKIE['registro_nombre'];
    $apellidos = $_COOKIE['registro_apellidos'];
    $pass = $_COOKIE['registro_pass'];
    $email = $_COOKIE['registro_email'];
    $movil = $_COOKIE['registro_movil'];


//comprobamos que no existe un email con el que estás intentado registrarte
$comprueba_email = $mysqli -> 
            query("SELECT * FROM usuario WHERE email = '$email' ;");
    if ($mysqli->affected_rows == 0){

          //encriptamos la contraseña
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $inserta_usuario = $mysqli -> 
            query("INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `nombre`, `apellidos`, `movil`, `tipo`) VALUES (NULL, '$email', '$pass', '$nombre', '$apellidos', '$movil', '0');");
    if ($mysqli->affected_rows == 1){
        
            $resultado_consulta = $mysqli->query("SELECT `id_usuario` FROM usuario WHERE email= '$email'");
            $r = $resultado_consulta->fetch_array();
            $id = $r['id_usuario'];
        if ($mysqli->affected_rows == 1){
            // Envío mensaje bienvenida y confirmación 

            // creamos una clave random para la confirmación
            $claveRandom = substr(sha1(mt_rand()),20,60); // Hay que hashearlo (encriptarlo)

            $comprueba_claveConf = $mysqli -> 
            query("SELECT * FROM usuario WHERE clave_validacion = '$claveRandom' ;");
    if ($mysqli->affected_rows == 0){

            $inserta_claveConf = $mysqli -> 
            query("UPDATE `usuario` SET `clave_validacion` = '$claveRandom' WHERE `usuario`.`id_usuario` = '$id';");
        if ($mysqli->affected_rows == 1){

            $to = $email; // Aquí se pone la variable del email que nos pasa el usuario
            $subject = "Bienvenid@ a Helpet, ".$nombre."!";

            $message = '
            <html>
            <head>
            <title>Helpet Spain</title>
            </head>
            <body>
            <h1>Helpet Spain</h1>
            <hr>
            <p>Te has registrado correctamente!</p>
            <p>Ayuda a cambiar el mundo, ayuda a encontrar...</p>
            <table>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            </tr>
            <tr>
            <td>'.$nombre.'</td>
            <td>'.$apellidos.'</td>
            </tr>
            </table>
            <br><br>
            <p>Debes activar tu cuenta pulsando este enlace: <a href="http://www.helpet.hol.es/confirmarRegistro.php?i='.$id.'&c='.$claveRandom.'"><b>Confirmar registro para empezar a ayudar 😻</b></a></p>
            </body>
            </html>
            ';


            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=UTF-8\r\n"; 

            // More headers
            $headers .= "From: Helpet Spain 😻 <helpetspain@gmail.com>\r\n";

            mail($to,$subject,$message,$headers);
            header("location:inicioSesion.php?err=confirmar&email=".$email."");

         
           // require 'ventana.php';
    }
    else {
        
        header("location:inicioSesion.php?err=8"); // Ha ocurrido un error, intenta registrarte de nuevo
           
    }
}else {
    // $claveRandom = "";
    // $claveRandom = substr(sha1(mt_rand()),20,60);
    // echo "Entra en el else, ".$claveRandom;
    // return;
    // // Recoger el código en una función, para que ninguna clave se repita

    header("location:inicioSesion.php?err=9"); // Ha ocurrido un error, intenta registrarte de nuevo 
}
}else {

     header("location:inicioSesion.php?err=10"); // Este email ya existe, intentelo de nuevo con un nuevo email

}
}else {
     header("location:inicioSesion.php?err=11"); // Ha ocurrido un error, intenta registrarte de nuevo 
}
}else {
     header("location:inicioSesion.php?err=12"); // Este email ya existe, intentalo de nuevo con un nuevo email

};


    
  
    
    ?>

</body>
</html>