<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>



<header>
  
  <nav id="navbar" class="navDefault">
    <!-- <div class="navContainer">
      <div class="navAdd">
        <span class="element"></span>
      </div>
      <div class="navAdd">
        <p>front-end developer | code breaker</p>
      </div>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
  </nav> -->

  <a href="#about">
  <svg class="arrows">
    <path class="a1" d="M0 0 L30 32 L60 0"></path>
    <path class="a2" d="M0 20 L30 52 L60 20"></path>
    <path class="a3" d="M0 40 L30 72 L60 40"></path>
  </svg>
  </a>
</header><!--/.header-->
