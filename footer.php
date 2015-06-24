    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <?php 

                $args = array(
                    'menu' => 'footer-menu',  
                    'menu_class' => 'additionalNav'
                );

                wp_nav_menu ( $args);   

            ?>            
          </div>
          <div class="col-sm-6">
            <p>&copy; <?php echo date ( Y ); ?> carefor. | All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    
    
    <?php wp_footer(); ?>     
  </body>
</html> 