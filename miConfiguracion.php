<style type="text/css">
	#warning { position:fixed; top:0px; bottom:0px; left:0px; right:0px; background:#c14328; font-family:"Arial",sans-serif; }
      #warning a.closeThis { position:absolute; top:20px; right:20px; display:block; width:20px; height:20px; font-size:30px; line-height:20px; text-align:center; color:#fff; text-decoration:none; text-shadow:-1px -1px #a63922; }
      #warning .warningContent { position:absolute; top:50%; left:50%; margin:-40px 0px 0px -170px; display:block; width:380px; height:80px; color:#f6e2dd; text-shadow:-1px -1px #a63922; }
        #warning .warningContent span { font-size:81px; font-weight:bold; line-height:93px; display:block; width:20px; float:left; margin-right:5px; }
        #warning .warningContent .wHeading { font-size:38px; font-weight:bold; line-height:45px; margin:0px; letter-spacing:-2px; }
        #warning .warningContent p { font-size:14px; font-weight:regular; line-height:16px; letter-spacing:0px; margin:0px; padding:0px; }
        #warning .warningContent p a { font-size:14px; font-weight:regular; color:#ff5559; text-decoration:underline; }
</style>

<?php include ("seguridad.php");

include('misfunciones.php');
$mysqli = conectaBBDD();


if (isset($_POST['id_usuario'])){
$_id = $_POST['id_usuario'];

if ($_POST['id_usuario'] === $_SESSION['id_usuario']){




?>



  <div class="row" style="margin-left: 30%; margin-right: 30%; padding-top: 10%;">
    <form>


              <h3>Mis datos/Modificar mis datos</h3>
            	<br>

            	<?php  echo '<img style="border-radius: 100%; width: 200px;  vertical-align: middle; margin-left: 15px; margin-right: 35px;" src="'.$_SESSION['foto'].'" alt="helpet | '.$_SESSION['nombre'].', '.$_SESSION['apellidos'].'"/>'; ?><button>Cambiar Imagen</button>
				<br><br><br>
              <div class="input-field col s12">
                <input id="Nombre" type="text" class="validate">
                <label for="Nombre" data-error="wrong" data-success="right"><?php print($_SESSION['nombre']); ?></label>
              </div>

              <div class="input-field col s12">
                <input id="apellidos" type="text" class="validate">
                <label for="apellidos" data-error="wrong" data-success="right"><?php print($_SESSION['apellidos']); ?></label>
              </div>

               <div class="input-field col s12">
                <input id="email" type="text" class="validate">
                <label for="email" data-error="wrong" data-success="right"><?php print($_SESSION['email']); ?></label>
              </div>


              <div class="input-field col s12">
                <input id="movil" type="text" class="validate">
                <label for="movil" data-error="wrong" data-success="right"><?php print($_SESSION['movil']); ?></label>
              </div>


              <br>
              Cambiar contraseña: 
              <br>

              <div class="input-field col s12">
                <input id="pass" type="text" class="validate">
                <label for="pass" data-error="wrong" data-success="right">Antigüa contraseña</label>
              </div>

              <div class="input-field col s12">
                <input id="pass" type="text" class="validate">
                <label for="pass" data-error="wrong" data-success="right">Nueva contraseña</label>
              </div>

              <div class="input-field col s12">
                <input id="pass" type="text" class="validate">
                <label for="pass" data-error="wrong" data-success="right">Repita contraseña</label>
              </div>





    </form>
  </div>






<?php 
}else{
	 echo '<section id="warning">
    <a href="#" class="closeThis">✕</a>
    <section class="warningContent">
      <span>!</span>
      <h5 class="wHeading">parámetro incorrecto</h5>
      <p>Error en la parametrización, vuelve a la página anterior.</p>
    </section>
  </section>';
}
}else{
	 echo '<section id="warning">
    <a href="#" class="closeThis">✕</a>
    <section class="warningContent">
      <span>!</span>
      <h5 class="wHeading">reinicia tu sesión</h5>
      <p>Error de servidor, reinicia la sesión y prueba a entrar en la confguración de nuevo.</p>
    </section>
  </section>';
}


?>