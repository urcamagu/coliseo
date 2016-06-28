<?php if (isset($msg)) echo $msg; ?>
<div class="panel panel-default">
    <div class="panel-heading"><h3><b>Noticias registradas</b></h3></div>

    <table class="table" border="0" cellpadding="2" cellspacing="2">
        <tr>
            <th>Título</th>
            <th>Sección</th>
            <th>Fecha Desde</th>
            <th>Fecha Hasta</th>
            <th>Visitas</th>
            <th>Estado</th>
        </tr>

        <?php
        foreach ($noticia as $n) {
            if ($n['estado'] == 'A') {
                $estado_descripcion = "Activo";
            } else {
                $estado_descripcion = "Inactivo";
            }
            if (is_null($n['fecha_hasta'])) {
                $fecha_hasta_descripcion = '  ';
            }
            foreach ($seccion_noticia as $sn){
                if ($n['id_seccion_noticia'] == $sn['id_seccion_noticia']){
                    $seccion_noticia_descripcion = $sn['descripcion'];
                    break;
                }
            }
            
            ?>
            <tr valign = "middle">
                <td><?php echo anchor(site_url() . '/noticia/edit_news/' . $n['id_noticia'], $n['titulo'], 'style="text-decoration:none;"'); ?></td>
                <td><?php echo anchor(site_url() . '/noticia/edit_news/' . $n['id_noticia'], $seccion_noticia_descripcion, 'style="text-decoration:none;"'); ?></td>                
                <td><?php echo anchor(site_url() . '/noticia/edit_news/' . $n['id_noticia'], $n['fecha_desde'], 'style="text-decoration:none;"'); ?></td>                
                <td><?php echo anchor(site_url() . '/noticia/edit_news/' . $n['id_noticia'], $fecha_hasta_descripcion, 'style="text-decoration:none;"'); ?></td>                
                <td><?php echo anchor(site_url() . '/noticia/edit_news/' . $n['id_noticia'], $n['visitas'], 'style="text-decoration:none;"'); ?></td>                
                <td><?php echo anchor(site_url() . '/noticia/edit_news/' . $n['id_noticia'], $estado_descripcion, 'style="text-decoration:none;"'); ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="6">
                <button class="btn btn-lg btn-success btn-block" type="Success" onclick="window.location.href = '<?php echo site_url() . "/noticia/add_news" ?>'">Registrar Nuevo</button>
            </td>
        </tr>
    </table>
</div>