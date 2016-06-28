<?php if (isset($msg)) echo $msg; ?>
<div class="panel panel-default">
    <div class="panel-heading"><h3><b>Usuarios registrados</b></h3></div>

    <table class="table" border="0" cellpadding="2" cellspacing="2">
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Administrador</th>
            <th>Estado</th>
        </tr>

        <?php
        foreach ($usuario as $u) {
            if ($u['administrador'] == 1) {
                $administrador_descripcion = "Si";
            } else {
                $administrador_descripcion = "No";
            }

            if ($u['estado'] == 'A') {
                $estado_descripcion = "Activo";
            } else {
                $estado_descripcion = "Inactivo";
            }
            ?>
            <tr valign = "middle">
                <td><?php echo anchor(site_url() . '/usuario/edit_user/' . $u['id_usuario'], $u['usuario'], 'style="text-decoration:none;"');
            ?></td>
                <td><?php echo anchor(site_url() . '/usuario/edit_user/' . $u['id_usuario'], $u['nombre'] . ' ' . $u['paterno'] . ' ' . $u['materno'], 'style="text-decoration:none;"'); ?></td>
                <td><?php echo anchor(site_url() . '/usuario/edit_user/' . $u['id_usuario'], $administrador_descripcion, 'style="text-decoration:none;"'); ?></td>
                <td><?php echo anchor(site_url() . '/usuario/edit_user/' . $u['id_usuario'], $estado_descripcion, 'style="text-decoration:none;"'); ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4">
                <button class="btn btn-lg btn-success btn-block" type="Success" onclick="window.location.href = '<?php echo site_url() . "/usuario/add_user" ?>'">Registrar Nuevo</button>
            </td>
        </tr>
    </table>
</div>