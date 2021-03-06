<form class="form-signin" role="form" action="<?php echo base_url(); ?>index.php/usuario/new_user" method="post" name="process"  enctype="multipart/form-data">
    <?php
    if (isset($usuario)) {
        foreach ($usuario as $u) {
            ?>
            <h2 class="form-signin-heading" align="center">Actualización de Datos del Usuario</h2>
            <input type="hidden" name="id_usuario" value="<?php echo $u['id_usuario']; ?>">
            Nombre: <input type="text" class="form-control" placeholder="Nombre" value="<?php echo $u['nombre']; ?>" name="nombre" required autofocus><br>
            Paterno: <input type="text" class="form-control" placeholder="Paterno" value="<?php echo $u['paterno']; ?>" name="paterno" required><br>
            Materno: <input type="text" class="form-control" placeholder="Materno" value="<?php echo $u['materno']; ?>" name="materno" required><br>
            Usuario: <input type="text" class="form-control" placeholder="Usuario" value="<?php echo $u['usuario']; ?>" name="usuario" required><br>
            Contraseña: <input type="clave" class="form-control" placeholder="Contraseña" value="<?php echo $u['clave']; ?>" name="clave" required><br>
            Administrador: <select class="form-control" name="administrador">
                <option value="1">Si</option>
                <option value="0" selected>No</option>
            </select>
            Estado: <select class="form-control" name="estado">
                <option value="A" selected>Activo</option>
                <option value="I" >Inactivo</option>
            </select>
            <?php
        }
    } else {
        ?>
        <h2 class="form-signin-heading" align="center">Registro de Nuevo Usuario</h2>
        Nombre: <input type="text" class="form-control" placeholder="Nombre" name="nombre" required autofocus><br>
        Paterno: <input type="text" class="form-control" placeholder="Paterno" name="paterno" required><br>
        Materno: <input type="text" class="form-control" placeholder="Materno" name="materno" ><br>
        Usuario: <input type="text" class="form-control" placeholder="Usuario" name="usuario" required><br>
        Contraseña: <input type="clave" class="form-control" placeholder="Contraseña" name="clave" required><br>
        Administrador: <select class="form-control" name="administrador">
            <option value="1">Si</option>
            <option value="0" selected>No</option>
        </select>
        <input type="hidden" name="estado" value="A">
    <?php } ?>
    <button class="btn btn-lg btn-success btn-block" type="submit">Guardar</button>
</form>
