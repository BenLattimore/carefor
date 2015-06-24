<?php get_header(); ?>

  <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>

    <section id="nonJobHero" class="colorful">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Care work with real personality.</h1>
            <h2>Now available in <a href="#">London</a> and <a href="#">Essex</a>.</h2>
          </div>
        </div>
      </div>
    </section> 
    
    <section id="mainAdvertSection">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="sectionArea homeSection text-center">
              <h1>Looking for work?</h1>
              <p>Find a care job that suits your personality, not just your skillset.</p>
              <div class="homeButtons">
                <a href="<?php bloginfo ('url'); ?>/locations/london"><button type="button" class="btn btn-block btn-carefor">London</button></a>          
                <a href="<?php bloginfo ('url'); ?>/locations/essex"><button type="button" class="btn btn-block btn-carefor">Essex</button></a>    
              </div>                
            </div>
          </div>
            
          <div class="col-md-6">
            <div class="sectionArea homeSection text-center">
              <h1>Looking for care staff?</h1>
              <p>Find the <strong>right</strong> carers - not just a pair of hands.</p>
              <p><a href="<?php bloginfo ('url'); ?>/employers">Find out more about our unique adverts and how we work hard to ensure your adverts appear in the front of the right carers at the right time.</a></p>
              <div class="homeButtons">                
                <a href="<?php bloginfo ('url'); ?>/post-a-job"><button type="button" class="btn btn-block btn-carefor">Post a Job</button></a> 
              </div> 
              <p>Oh, we forgot to mention, <strong>each advert only costs 99p!</strong></p>
            </div> 
          </div>            
            
        </div>
      </div>
    </section>

  <?php endwhile; else: ?>


      <p>Ooops! Something went wrong.</p>

  <?php endif; ?>




<?php get_footer(); ?>