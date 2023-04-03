<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />

        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>
        <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
        <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/slideshow.js"/>
                      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                      <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
    </head>

    <body <?php body_class('bg-gray'); ?>>

        <!-- Start container -->
        <div id="page" class="site container mx-auto bg-white">
	          <div id="main" class="site-inner flex flex-row flex-wrap">
                <header class="bg-gray-100 w-full">
     <div class="flex flex-row justify-end">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-menu flex flex-row',
                            )
                        );
                        ?>
                    </div>
                    <div class="flex flex-col flex-wrap pb-10">
                        <a class="blog-nav-item active home" href="<?php echo get_bloginfo( 'wpurl' );?>"><img class="h-20" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/logo_femme_couleur.png" title="<?php echo get_bloginfo('wptitle');?>" /></a>
                    </div>
                    <div class="bg-blue-600 rounded-t-lg">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'main-menu flex flex-row',
                            )
                        );
                        ?>
                    </div>     
                </header>
                <!-- NAVIGATION MOBILE -->
                <!-- <div id="nav-mobile">
                     <div class="container-fluid">
                     <button id="menu-open" class="visible"><i class="ico ico-large i-menu"></i></button>
                     <div id="menu-wrapper" class="hidden">
                     <button id="menu-close"><i class="ico ico-large i-cross"></i></button>
                     <ul class="main-menu">
                     <li><a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Accueil</a></li>
                     </ul>

                     </div>
                     </div>
                     </div> -->
