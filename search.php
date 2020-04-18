<?php
    /*
    *The main template file
    */
    ?>


<?php get_header()?>

<main class="container-fluid blog-section">
        <div class="row">
            <div class="col-sm-8">
            <?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
            <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
</a>
            <p><?php echo get_the_date('F j, Y');?> by <a href=""> <?php the_author(); ?> </a> </p>
            <div class="pb-2">
                    <p class="d-inline"><?php the_tags('Tagged: ',' ~ ') ?></p>
            </div>
            <div class="my-3">
              <?php the_post_thumbnail('medium'); ?>
            </div>
                <p><?php the_excerpt() ?></p>

                <div class="mb-3">
                    <a href="<?php the_permalink(); ?>">     <?php _e('Read more...') ?>   </a>

</div>
                    <?php endwhile; else : ?>
            
            
        
    


        
   
                        <p><?php _e('Sorry, no matches for:<em>' . get_search_query() . '</em>, please search again'); ?></p>

<?php
    endif; 
?>
<nav>
    <ul class="nav">
<li> <?php next_posts_link();   ?> </li> &nbsp;
<li> <?php previous_posts_link(); ?> </li>

</ul>
</nav>
</div>

<aside class="col-sm-4">
    <?php get_sidebar(); ?>
  </aside>

</div><!-- /row -->
</main><!-- /container -->

<?php get_footer()?>