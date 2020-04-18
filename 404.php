<?php
    /*
    *The template for displaying 404 pages
    */
    ?>


<?php get_header()?>

<main class="container-fluid blog-section">
        
        
    <div class="row sad_face">
        <div class="col-md-6 offset-md-3">
            <h2 class="display-3"> Oh no! Page not found.   </h2>
            <i class="fas fa-sad-cry"></i>
        </div>
    </div>
    <div class="row py-5">
      <div class="col-md-3"><?php the_widget('WP_Widget_Pages') ?></div>
      <div class="col-md-3"><?php the_widget('WP_Widget_Categories') ?></div>
      <div class="col-md-3"><?php the_widget('WP_Widget_Recent_Posts') ?></div>
      <div class="col-md-3"><?php the_widget('WP_Widget_Tag_Cloud') ?></div>
    

    




</div><!-- /row -->
</main><!-- /container -->

<?php get_footer()?>