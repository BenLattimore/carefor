<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
            
            wp_title( '-', true, 'right' );

            bloginfo( 'name' );

        ?>
    </title> 
	  <meta name="description" content="carefor.">
    

    <?php wp_head(); ?>    
    
  </head>

  <body>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo ('url'); ?>">
            <img src="<?php bloginfo ('template_directory'); ?>/img/newFavicon.png" alt="Our Logo" title="Our Logo">  
          </a>
          <p class="navbar-text">carefor.</p>                    
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php bloginfo ('url'); ?>/locations/london"><button type="button" class="btn btn-default navbar-btn">Jobs | London</button>
</a></li>
            <li><a href="<?php bloginfo ('url'); ?>/locations/essex"><button type="button" class="btn btn-default navbar-btn">Jobs | Essex</button>
</a></li>
            <li><a href="<?php bloginfo ('url'); ?>/post-a-job"><button type="button" class="btn btn-default navbar-btn">Post a Job</button>
</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>    