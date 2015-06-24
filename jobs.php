<?php 

/*

    Template Name: Jobs

*/

get_header(); ?>

      <?php 
        $args = array(
            'post_type' => 'job'
        );
        $the_query = new WP_Query( $args );		    
	    ?>


	    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
                  
                  <div class="col-sm-4">
                    <div class="devImgBlock" id="therapyImg" style="background-image: url('<?php the_field( 'production_image' ); ?>')"></div>
                    <p><strong><?php the_title(); ?></strong></p>
                  </div>                  
          
		  <?php endwhile; endif; ?>



<?php get_footer(); ?>