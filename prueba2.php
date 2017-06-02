
<html>
  <head>

  </head>
  <body>
<?php        // coge imagen aleatoria y la pone
        $carpeta="img_user/";
 
# definimos un array que contendra todas las imagenes de la carpeta
$imagenes=array();
 
// devuelve el tipo mime de su extensión
$finfo = finfo_open(FILEINFO_MIME_TYPE);
 
// recorremos toda la carpeta para buscar los archivos
foreach (glob($carpeta."*") as $filename) {
    $mime=finfo_file($finfo, $filename);
    if($mime=="image/jpeg" || $mime=="image/pjpeg" || $mime=="image/gif" || $mime=="image/png")
    {
        # guardamos las imagenes en un array
        $imagenes[]=$filename;
    }
}
 
finfo_close($finfo);
 
# buscamos un numero aleatorio entre la cantidad de imagenes encontradas
$aleatorio=rand(0,count($imagenes)-1);
 
# mostramos dicha imagen
echo '<img src="'.$imagenes[$aleatorio].'">';

?>
  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">

            
    </script>

</html>