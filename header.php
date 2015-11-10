<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lester Carreon | Front-End Developer</title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="icon" href="<?php bloginfo('template_url') ?>/images/logo.png" type="image/x-icon" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<nav id="navbar" class="navDefault">
  <div class="container navContainer">
    <div class="hamburger-holder">
      <i class="fa fa-bars fa-2x"></i>
      <ul class="nav" id="nav">
        <li><a href="#about" id="aboutClick">About</a></li>
        <li><a href="#portfolio" id="portfolioClick">Portfolio</a></li>
        <li><a href="#home" id="homeClick"><img src="<?php bloginfo('template_url') ?>/images/logo30.png"></a></li>
        <li><a href="#skills" id="skillsClick">Skills</a></li>
        <li><a href="#contact" id="contactClick">Contact</a></li>
      </ul> 
    </div>
</nav>

<header id="home">
<div class="reveal">
  <div class="logo">
    <img src="<?php bloginfo('template_url') ?>/images/LesterLogos.svg">
  </div>
  <h1>Lester Carreon
  </h1>
  <p>front-end developer | code breaker</p>
</div>

    <div class="title">
      <div>
         <span class="element"></span>
       </div>
       <div>
         <p>front-end developer | code breaker</p>
       </div>
    </div>


  <!--         <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?> -->
         </div> 

  <a href="#about" id="arrows">
  <svg class="arrows">
    <path class="a1" d="M0 0 L30 32 L60 0"></path>
    <path class="a2" d="M0 20 L30 52 L60 20"></path>
    <path class="a3" d="M0 40 L30 72 L60 40"></path>
  </svg>
  </a>
</header><!--/.header-->
