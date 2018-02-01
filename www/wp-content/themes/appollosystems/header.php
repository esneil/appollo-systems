<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta <?php bloginfo("charset"); ?>>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content="<?php bloginfo('html_type'); ?>"><![endif]-->
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords"
          content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon and touch icons  -->
    <?php wp_site_icon() ?>


    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url") ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--    --><?php //wp_head(); ?>
</head>

<body class="page no-sidebar header-style-1 menu-has-search menu-has-cart">
<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

        <div id="site-header-wrap">


            <!-- Header -->
            <header id="site-header" class="header-front-page style-1">
                <div id="site-header-inner" class="container">
                    <div class="wrap-inner">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="home-slider-full-screen.html" title="Construction" rel="home"
                                   class="main-logo">
                                    <?php the_custom_logo(); ?>
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                        <nav id="main-nav" class="main-nav">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu',
                                    'container_class' => 'menu',
                                    'container' => '',
                                )
                            ); ?>
                        </nav><!-- /#main-nav -->

                    </div>
                </div>
        </div><!-- /.nav-top-cart-wrapper -->
    </div>
</div><!-- /#site-header-inner -->

