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
include ("seguridad.php");


include('misfunciones.php');
$mysqli = conectaBBDD();


//leo los parámetros que me pasa el inicioSesion.php
$email = $_COOKIE['usuario_email'];
$usuario_clave = $_COOKIE['usuario_clave'];

/*setcookie(email, $email, time() + 60);
setcookie(usuario_clave, $usuario_clave, time() + 60); */


//Hago la consulta a la base de datos
$resultado_consulta = $mysqli->query("SELECT * FROM usuario WHERE email= '$email'");
$numero_usuario = $resultado_consulta->num_rows;
if ($numero_usuario > 0) {
    //la query es válida y me ha devuelto por lo menos un dni.
    //entonces mostrará el menú normal
    //voy a leer el campo DNI y el campo password de la BBDD
    $r = $resultado_consulta->fetch_array();
    $email = $r['email'];
    $password = $r['password'];
    $tipo = $r['tipo'];
    $validado = $r['validado'];

    if ( $validado === '1'){


    //COMO SOLO PUEDE HABER COMO MUCHO UN DNI CON ESTE RESULTADO PORQUE EL DNI ES
    //CAMPO CLAVE Y NO SE PUEDE REPETIR LO PONGO CON UN IF; SI NO, SE TIENE QUE TRATAR TODO 
    //RESULTADO DE LA QUERY CON UN BUCLE FOR POR EJEMPLO.
    if ((password_verify($usuario_clave, $password)) || $usuario_clave == $password) {

            //Creamos una variable de sesion para poder tener acceso desde todas las páginas
            session_start();
            $_SESSION['id_usuario'] = $r['id_usuario'];
            $_SESSION['nombre'] = $r['nombre'];
            $_SESSION['apellidos'] = $r['apellidos'];
            $_SESSION['email'] = $r['email'];
            $_SESSION['movil'] = $r['movil'];
            $_SESSION['foto'] = $r['foto'];
            
           header("location:ventana.php");
            
            // switch ($tipo) {
            //     case 0 : require 'ventana.php'; break;
            //     case 1 : require 'ventanaPropietario.php'; break;
            // }
        
        } else {
            
//            echo '<div style="margin-top: 20%;" class="alert alert-danger alert-dismissable">
//  <button type="button" class="close" data-dismiss="alert">&times;</button>
//  <strong>¡Cuidado!</strong><h1>Aún no has sido admitido por el profesor</h1>
//</div>';
            
            //require 'ventanaError.php';-------------------------
            header("location:inicioSesion.php?err=1"); //clave incorrecta
//          echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>";
//          require 'inicioSesion.php';
        }

        } else {

             header("location:inicioSesion.php?err=0"); // Tienes que validar tu email

        }
    } else {
//             echo '<div style="margin-top: 20%;" class="alert alert-danger alert-dismissable">
//  <button type="button" class="close" data-dismiss="alert">&times;</button>
//  <strong>¡Cuidado/st!<rong><h1>EL USUARIO O CONTRASEÑA NO SON CORRECTOS</h1>
//</div>';
            
       
            //require 'ventanaError2.php';------------------------
            header("location:inicioSesion.php?err=2"); // usuario inexistente
    }
    ?>

</body>
</html>