<?php get_header(); ?>


  <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>

    <section id="heroSection">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div id="titleSection">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section> 
    
    <section id="mainAdvertSection">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            
            <div class="sectionArea page_text">
              <?php the_content(); ?>  
            </div>
                      
            
            
          </div>
        </div>
      </div>
    </section>


  <?php endwhile; else: ?>


      <p>Ooops! Something went wrong.</p>

  <?php endif; ?>




<?php get_footer(); ?>