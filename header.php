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

        <title><?php wp_title(''); ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/favicon.ico">
        <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
        <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/scripts.js"></script>
                      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                      <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
     <!-- Matomo -->
     <script>
     var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var u="//analytics.kernavelo.org/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
})();
</script>
    <!-- End Matomo Code -->

    </head>

    <body <?php body_class('bg-gray'); ?>>

        <!-- Start container -->
        <div id="page" class="site container mx-auto bg-transparent">
	          <div id="main" class="site-inner flex flex-row flex-wrap">
                <header class="bg-transparent w-full laptop:bg-header-image bg-no-repeat">
                    <div class="flex flex-row justify-end">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'hidden laptop:flex top-menuflex-row',
                            )
                        );
                        ?>
                    </div>
                    <div class="flex flex-col flex-wrap pb-10 pt-6 laptop:pt-0">
     <a class="blog-nav-item logo active home flex justify-center laptop:justify-start" href="<?php echo get_bloginfo( 'wpurl' );?>">
     <img class="h-16 laptop:hidden" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/logo_femme_couleur.png" title="<?php echo get_bloginfo('wptitle');?>" />
     <img class="logo-naked h-20 hidden laptop:block" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/logo--naked.svg" title="<?php echo get_bloginfo('wptitle');?>" />
     <img class="coiffe-homme hidden laptop:block absolute" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/logo-coiffe-homme.svg" title="<?php echo get_bloginfo('wptitle');?>" />
     <img class="coiffe-femme hidden laptop:block absolute" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/logo-coiffe-femme.svg" title="<?php echo get_bloginfo('wptitle');?>" />
     <img class="roue hidden laptop:block absolute" src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/logo--roue.svg" title="<?php echo get_bloginfo('wptitle');?>" />
     </a>
                    </div>
                    <div class="bg-blue-600 rounded-t-lg overflow-hidden">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'main-menu flex-row hidden laptop:flex',
                            )
                        );
                        ?>
                    </div>     
                </header>


                <!-- NAVIGATION MOBILE -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'main-menu-mobile p-6 flex-col flex fixed top-0 left-0 w-screen h-screen overflow-scroll bg-gray-900 text-white hidden z-20 transition-all opacity-0 laptop:hidden',
                    )
                );
                ?>
                <div id="nav-mobile" class="fixed left-4 top-4 z-30 laptop:hidden">
                    <button id="menu-open" class="visible bg-transparent p-0">
                        <img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/menu.svg"/>
                    </button>
                    <button id="menu-close" class="hidden z-10 bg-transparent p-0">
                        <img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/close.svg"/>
                    </button>
                </div> 
