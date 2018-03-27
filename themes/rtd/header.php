<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- CSS de Bootstrap -->
    <link href="<?php bloginfo('template_directory');?>/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/icon-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/icon-line/css/simple-line-icons.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/icon-etlinefont/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/icon-line-pro/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/icon-hs/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/dzsparallaxer/dzsscroller/scroller.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/dzsparallaxer/advancedscroller/plugin.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/hs-megamenu/src/hs.megamenu.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/hamburgers/hamburgers.min.css" rel="stylesheet">

    <link href="<?php bloginfo('template_directory');?>/css/unify-core.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/unify-components.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/unify-globals.css" rel="stylesheet">

    <link href="<?php bloginfo('template_directory');?>/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/vendor/custombox/custombox.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/custom.css" rel="stylesheet">





    <script src="<?php bloginfo('template_directory');?>/vendor/jquery/jquery.min.js"></script>

    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <main>
      <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="300">
          <div class="u-header__section u-header__section--light g-bg-white-opacity-0_9 g-transition-0_3 " data-header-fix-moment-classes="u-shadow-v18 g-py-0">
<?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
          </div>
    </header>
