<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/datepicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/carousel.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>js/table.js"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


    </head>
    <body role="document">
        <!-- header -->
        <?php if ($this->session->userdata('conectado') == 1) { ?>
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/coliseo.jpg" width="30px"></a>
                    </div>


                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>">Inicio</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Noticias <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor(site_url() . '/noticia/add_news', 'Registrar noticias'); ?></li>
                                    <li><?php echo anchor(site_url() . '/noticia', 'Ver todas las noticias'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor(site_url() . '/noticia/recent_news', 'Noticias recientes'); ?></li>
                                    <li><?php echo anchor(site_url() . '/noticia/top_news', 'Noticias más leidas'); ?></li>

                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catálogos <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor(site_url() . '/seccion_noticia/add_user', 'Registrar clasificados'); ?></li>
                                    <li><?php echo anchor(site_url() . '/seccion_noticia', 'Ver clasificados'); ?></li>
                                    <li class="divider"></li>
                                    <li><?php echo anchor(site_url() . '/seccion_noticia/add_user', 'Registrar sección'); ?></li>
                                    <li><?php echo anchor(site_url() . '/seccion_noticia', 'Ver secciones'); ?></li>

                                </ul>
                            </li>

                            <?php if ($this->session->userdata('administrador') == 1) { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><?php echo anchor(site_url() . '/usuario/add_user', 'Registrar'); ?></li>
                                        <li><?php echo anchor(site_url() . '/usuario', 'Ver todos'); ?></li>
                                    </ul>
                                </li>
                            <?php } ?>

                        </ul>

                        <u1 class="nav navbar-nav navbar-right">
                            <li class="navbar-text">(<?php echo $this->session->userdata('nombre') . " " . $this->session->userdata('paterno') ?>)</li>
                            <li><?php echo anchor(site_url() . '/home/do_logout', 'Salir'); ?></li>

                        </u1>
                    </div>

                </div>
            </div>
        <?php } ?>
        <!-- end header -->
        <br><br><br><br>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <?php echo $content_for_layout ?>
            </div>
        </div>
    </body>
</html>
