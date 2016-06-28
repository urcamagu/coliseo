<?php if(isset($msg)) echo $msg; ?>
  <form class="form-signin" role="form" action="<?php echo base_url();?>index.php/login/process" method="post" name="process">
    <h2 class="form-signin-heading" align="center">Por favor inicia sesión</h2>
    <input type="text" class="form-control" placeholder="Usuario" name="usuario" size="25" required autofocus><br>
    <input type="password" class="form-control" placeholder="Contraseña" name="clave" size="25" required><br>
    <button class="btn btn-lg btn-success btn-block" type="submit">Iniciar</button>
  </form>
