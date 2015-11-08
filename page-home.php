<?php get_header();  ?>

<div class="main">
    <div class="content">
      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php endwhile; // end the loop?>
      
      <!-- ABOUT -->

      <section class="about" id="about"> 
        <div class="container aboutContainer">
          <div>
            <?php if( get_field('about_image') ): ?>
                  <?php $image = get_field('about_image'); ?>
                  <img src="<?php echo $image['sizes']['medium']; ?>" >
              <?php endif; ?> 
          </div>
          <div class="blurb">
            <h2>Let's Chat!</h2>
            <p>Hey! I'm Lester Carreon and I am a front-end web developer. I'm also a certified Project Management Professional (PMP), street dancer, world traveller, and overall pretty cool guy. I'm a graduate from the University of Toronto with a  degree in communications and a proud member of Cohort 8 "Planet of the 8s" from HackerYou.</p>

            <p>My approach to making websites goes beyond just writing code. I like to integrate my planning and interpersonal skills with my technical expertise to develop functional, innovative, and responsive websites.</p>

            <h3>Give me a shout!</h3>

            <ul>
              <li><a href="https://twitter.com/Lesteropolis" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/in/lestercarreon" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://github.com/Lesteropolis" target="_blank"><i class="fa fa-github"></i></a></li>
              <li><a href="https://medium.com/@lesteropolis" target="_blank"><i class="fa fa-medium"></i></a></li>
            </ul>         
          </div>  
        </div>    


      </section>
      <div class="line"></div>
 <!--           <div>
             <ul class="loader">
              <li></li>
              <li></li>
              <li></li>
             </ul>
           </div>   -->
      
      <!-- PORTFOLIO -->
      <section class="portfolio">
        <div class="container">
          <h2>Portfolio</h2>
          <p>Here's a collection of my work.</p>
            <?php $portfolioQuery = new WP_query(
                  array(
                    'post_type'=>'portfolio',
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
                        <?php the_post_thumbnail('full'); ?>
                      </div>
                      <div>
                        <p><?php the_content(); ?></p>
                      </div>
                    </div>   
                    <?php the_category(); ?> 
                  </div> <!-- featured -->
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
      </section>
  
      
      <section class="freeze">
        
      </section>

     
      <!-- SKILLS -->
      <section class="skills">
        <div class="container">
          <h2>Skills</h2>

          <div>
            <h3>Tech stuff</h3>


          </div>
          <div class="devIconContainer">
            <div>
              <span class="my_own_class">&#xe636</span>
              <h4>HTML5</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe64a</span>
              <h4>CSS3</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe681</span>
              <h4>Javascript</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe650</span>
              <h4>jQuery</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe64b</span>
              <h4>SASS</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe60b</span>
              <h4>WordPress</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe663</span>
              <h4>Gulp</h4>
            </div>
            
            <div>
              <span class="my_own_class">&#xe602</span>
              <h4>Git</h4>
            </div>

            <div>
              <span class="my_own_class">&#xe608</span>
              <h4>Github</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe6aa</span>
              <h4>Sublime Text</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe65a</span>
              <h4>Trello</h4>
            </div>
            <div>
              <span class="my_own_class">&#xe695</span>
              <h4>Terminal</h4>
            </div>
          </div>

        </div>
      </section> <!-- / section.skills -->
      
    </div> <!-- /,content -->

  <section class="contact" id="contact">
    <div class="container">
      <h2>Contact</h2>
      <ul>
        <li><a href="https://twitter.com/Lesteropolis" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/in/lestercarreon" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://github.com/Lesteropolis" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://medium.com/@lesteropolis" target="_blank"><i class="fa fa-medium"></i></a></li>
      </ul>    
      <div class="contactFun">
         <p><?php the_content(); ?></p>
      </div>
     
    </div>
  </section>
</div> <!-- /.main -->
<?php get_footer(); ?>