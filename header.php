<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/paper.min.css" rel="stylesheet">

    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body>

    <nav class="navbar  navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>" title="<?php echo get_bloginfo( 'description' ); ?>" ><i class="fa fa-bullseye"></i> <?php echo get_bloginfo( 'name' ); ?></a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <?php wp_nav_menu( array( 'menu'   => 'primary', 'menu_class' => 'nav navbar-nav', 'container' => false )); ?>
        </div>
      </div>
    </nav>
