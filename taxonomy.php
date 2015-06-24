<?php get_header(); ?>

    <section id="nonJobHero" class="colorful">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php single_cat_title(); ?></h1>
          </div>
        </div>
      </div>
    </section> 

    
    <section id="mainAdvertSection">
      <div class="container">
        <h1>Recent Jobs</h1>
              
  <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>
              
            <div class="job-sectionArea">              
              <div class="row">
                  <div class="col-md-2" id="jobLogoBlock">
                    <div class="jobImage" style="background-image: url('<?php the_field('logo'); ?>');"></div>
                  </div>

                  <div class="col-md-8 text-center" id="jobInfoArea">
                    <h3><?php the_title(); ?></h3>
                    <h4><?php the_field('salary'); ?> | <?php the_field('location'); ?></h4>
                  </div>

                  <div class="col-md-2" id="jobApplyArea">
                    <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-block btn-carefor">View</button></a>           
                  </div>
              </div>
            </div>
              
        
        
              
  <?php endwhile; ?>
        
<div class="nav-previous alignleft"><?php next_posts_link( 'Older Jobs' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer Jobs' ); ?></div>        


  <?php else: ?>


      <p>Ooops! Something went wrong.</p>
<p>taxLoc</p>
      

  <?php endif; ?>
              
              
      </div>
    </section>







<?php get_footer(); ?>