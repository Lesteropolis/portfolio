<?php get_header(); ?>
<div class="main">
  <div class="container">
    <div class="content">

       <?php // Start the loop ?>
             <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

               <h2><?php the_title(); ?></h2>
               <?php the_content(); ?>

             <?php endwhile; // end the loop?>
             <h2>Featured work</h2>
             <p>We want to take some things from our portfolio and make it featured images on our home page</p>


               <?php $portfolioQuery = new WP_query(
                     array(
                       'post_type'=>'portfolio',
                       'cat'=>6,
                       'orderby'=>'title',
                       'order'=>'ASC'
                       )
                   ); ?>
             ​
               <!-- The loop -->
               <?php if ($portfolioQuery->have_posts()): ?>
                 <?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>
                   <!-- stuff goes here -->
                     <div class="featured">
                       <h3><?php the_title(); ?></h3>
                       <?php the_post_thumbnail(); ?>
                     <p><?php the_field('short_desc') ?></p>
                     </div>
                 <?php endwhile; ?>
                 <?php wp_reset_postdata(); ?>
               <?php endif; ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>