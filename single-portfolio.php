<?php get_header(); ?>

<div class="section">
  <div class="container">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p class="client">Client: <?php the_field('client_name'); ?></p> 

        <div class="shortDesc">
          <p>Short description: <?php the_field('short_desc'); ?></p>
          
        </div>

        <?php the_content(); ?>
        
        <div class="images">
          <?php while( has_sub_field('images') ): ?>
            <div class="image">
              <p><?php the_sub_field('caption'); ?></p>
              <?php $image = get_sub_field('image'); ?>
              <img src="<?php echo $image['sizes']['square'] ?>">
            </div>
          <?php endwhile; ?>
        </div>
        
        <?php while( has_sub_field('images') ): ?>
          <!-- Our sub fields go here -->
          <div class="image">
            <?php $image = get_sub_field('image'); ?>
            <pre><?php print_r($image);?></pre>
            <p><?php the_sub_field('caption'); ?></p>
          </div>
        <?php endwhile; ?>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>