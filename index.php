<?php get_header(); ?>



  <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>

      <h3><?php the_title(); ?></h3>
      <p>index</p>
      <?php the_content(); ?>

  <?php endwhile; else: ?>


      <p>Ooops! Something went wrong.</p>
<p>index</p>

  <?php endif; ?>




<?php get_footer(); ?>