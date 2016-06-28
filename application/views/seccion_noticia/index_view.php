<?php if (isset($msg)) echo $msg; ?>
<div class="panel panel-default">
    <div class="panel-heading"><h3><b>Secciones registradas</b></h3></div>

    <table class="table" border="0" cellpadding="2" cellspacing="2">
        <tr>
            <th>Descripción</th>
            <th>Orden</th>
            <th>Estado</th>
        </tr>

        <?php
        foreach ($seccion_noticia as $sn) {
            if ($sn['estado'] == 'A') {
                $estado_descripcion = "Activo";
            } else {
                $estado_descripcion = "Inactivo";
            }
            ?>
            <tr valign = "middle">
                <td><?php echo anchor(site_url() . '/seccion_noticia/edit_seccion/' . $sn['id_seccion_noticia'], $sn['descripcion'], 'style="text-decoration:none;"');
            ?></td>
                <td><?php echo anchor(site_url() . '/seccion_noticia/edit_seccion/' . $sn['id_seccion_noticia'], $sn['orden'], 'style="text-decoration:none;"'); ?></td>
                <td><?php echo anchor(site_url() . '/seccion_noticia/edit_seccion/' . $sn['id_seccion_noticia'], $estado_descripcion, 'style="text-decoration:none;"'); ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4">
                <button class="btn btn-lg btn-success btn-block" type="Success" onclick="window.location.href = '<?php echo site_url() . "/seccion_noticia/add_seccion" ?>'">Registrar Nuevo</button>
            </td>
        </tr>
    </table>
</div>