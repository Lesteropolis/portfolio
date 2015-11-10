<?php get_header();  ?>

<div class="main">
    <div class="content">
      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php endwhile; // end the loop?>
      
      <!-- ABOUT -->
    
      <section class="about" id="about">
        <div class="container">
          <h2 class="accentBorder">Let's Chat!</h2>
        </div>
        
        <div class="container aboutContainer">
          <div>
            <?php if( get_field('about_image') ): ?>
                  <?php $image = get_field('about_image'); ?>
                  <img src="<?php echo $image['sizes']['medium']; ?>" >
              <?php endif; ?> 
          </div>
          <div class="blurb">
            <p>Hey! I'm Lester Carreon and I am a front-end web developer. I'm also a certified Project Management Professional (PMP), street dancer, world traveller, and overall pretty cool guy. I'm a graduate from the University of Toronto with a  degree in communications and a proud member of Cohort 8 "Planet of the 8s" from HackerYou.</p>
            <p>My approach to making websites goes beyond just writing code. I like to integrate my planning and interpersonal skills with my technical expertise to develop functional, innovative, and responsive websites.</p>
            <ul>
              <li><a href="https://twitter.com/Lesteropolis" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/in/lestercarreon" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://github.com/Lesteropolis" target="_blank"><i class="fa fa-github"></i></a></li>
              <li><a href="https://medium.com/@lesteropolis" target="_blank"><i class="fa fa-medium"></i></a></li>
            </ul>         
          </div>  
        </div>    
      </section>

      
      
      <!-- PORTFOLIO -->
      <section class="portfolio">
        <div class="container">
          <h2 class="accentBorder">Portfolio</h2>
            <?php $portfolioQuery = new WP_query(
                  array(
                    'post_type'=>'portfolio',
                    'order'=>'ASC'
                    )
                ); ?>
            <!-- The loop -->
            <?php if ($portfolioQuery->have_posts()): ?>
              <?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>
                <!-- stuff goes here -->
                  <div class="portfolioContainer">                   
                      <div class="portfolioImage">
                        <?php the_post_thumbnail('full'); ?>
                      </div>
                      <div class="portfolioContent">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <p class="tags"><span>I used:</span> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' ';}?></p>
                        <p><a href="#"><button>View Live</button></a></p>
                      </div>                    
                  </div> <!-- featured -->
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
      </section>
  
      
      <section class="freeze" >
      </section>

     <!-- SKILLS -->
     <section class="skills" id="skills">
       <div class="container">
         <h2 class="accentBorder">Skills</h2>
         <div>
           <div class="iconSpace">
             <h3>Tech stuff</h3>
             <span class="my_own_class html5">&#xe636</span>
             <span class="my_own_class css3">&#xe64a</span>
             <span class="my_own_class js">&#xe681</span>
             <span class="my_own_class jQuery">&#xe650</span>
             <span class="my_own_class sass">&#xe64b</span>
             <span class="my_own_class wordpress">&#xe60b</span>
           </div>
           <div class="iconSpace">
             <h3>Workflow</h3>
             <span class="my_own_class sublime">&#xe6aa</span>
             <span class="my_own_class trello">&#xe65a</span>
             <span class="my_own_class terminal">&#xe695</span>
             <span class="my_own_class gulp">&#xe663</span>
             <span class="my_own_class bootstrap">&#xe647</span>
             <span class="my_own_class npm">&#xe61e</span>
           </div>
         </div> <!-- / wrapper  -->
     </section> <!-- / section.skills -->
      
      
    </div> <!-- /,content -->

  <section class="contact" id="contact">
    <div class="container">
      <h2 class="accentBorder">Contact</h2>
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