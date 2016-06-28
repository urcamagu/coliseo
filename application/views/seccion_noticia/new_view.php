<form class="form-signin" role="form" action="<?php echo base_url(); ?>index.php/seccion_noticia/new_seccion" method="post" name="process"  enctype="multipart/form-data">
    <?php
    if (isset($seccion_noticia)) {
        foreach ($seccion_noticia as $sn) {
            ?>
            <h2 class="form-signin-heading" align="center">Actualización de Datos de la Sección</h2>
            <input type="hidden" name="id_seccion_noticia" value="<?php echo $sn['id_seccion_noticia']; ?>">
            Descripción: <input type="text" class="form-control" placeholder="Descripción" value="<?php echo $sn['descripcion']; ?>" name="descripcion" required autofocus><br>
            Orden: <input type="text" class="form-control" placeholder="Orden" value="<?php echo $sn['orden']; ?>" name="orden" required><br>
            Estado: <select class="form-control" name="estado">
                <option value="A" selected>Activo</option>
                <option value="I" >Inactivo</option>
            </select>
            <?php
        }
    } else {
        ?>
        <h2 class="form-signin-heading" align="center">Registro de Nuevo Usuario</h2>
        Descripción: <input type="text" class="form-control" placeholder="Descripción" name="descripcion" required autofocus><br>
        Orden: <input type="text" class="form-control" placeholder="Orden" name="orden" required><br>

        <input type="hidden" name="estado" value="A">
    <?php } ?>
    <button class="btn btn-lg btn-success btn-block" type="submit">Guardar</button>
</form>
