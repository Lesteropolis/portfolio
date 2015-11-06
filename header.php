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

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<nav>
  <div class="container headerFlex">
    <!-- <h1>
      <a href="#">Lester</a>
    </h1> -->
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div>
</nav>

<header>

<!--   <?php if( get_field('hero_image') ): ?>
      <?php $image = get_field('hero_image'); ?>
      <img src="<?php echo $image['sizes']['large']; ?>" />
  <?php endif; ?> -->

    
  </div> <!-- /.container -->
</header><!--/.header-->

