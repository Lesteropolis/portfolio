<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php endwhile; // end the loop?>
      
      <!-- ABOUT -->
      <section id="about">
        <h2>About</h2>
        <div>
          <?php if( get_field('about_image') ): ?>
                <?php $image = get_field('about_image'); ?>
                <img src="<?php echo $image['sizes']['medium']; ?>" >
            <?php endif; ?> 

        </div>
        <div>
          <p>I am a front-end web developer based in Toronto. I am also a certified Project Management Professional (PMP) and I have several years of project and event planning experience. My intention is to integrate my planning and interpersonal skills with technical expertise to develop functional, innovative, and responsive websites.</p>
        </div>
      </section>
      
      <!-- PORTFOLIO -->
      <section class="portfolio">
      <h2>Portfolio</h2>
        <?php $portfolioQuery = new WP_query(
              array(
                'post_type'=>'portfolio',
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
                <div class="portfolioContainer">
                  <div class="portfolioImage">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                  <div>
                    <p><?php the_content(); ?></p>
                  </div>
                </div>   
              </div> <!-- featured -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </section>
      
      <section class="contact">
        <p><?php the_content(); ?></p>
      </section>
      


  
    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->
<?php get_footer(); ?>