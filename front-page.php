<?php
    /*
    *The main template file
    */
    ?>


<?php get_header()?>





<div class="container-fluid">
    <div class="row mt-4 position-relative d-flex justify-content-center align-items-center text-center">
        <img src="<?php header_image(); ?>" alt="lake background" class="header_img">
           
        <div class="position-absolute">
            <h1 class="feature-text diplay-1"> <?php featureText(); ?></h1>
        </div>
    </div>
</div>


<div class="container-fluid px-5">
    <div class="row welcome text-center mt-2">
        <div class="col-md-6 offset-md-3">
            <h1>About me</h1>
        </div>
        <hr>

        <div class="col-md-6 offset-md-3 ">
            <p class="lead"><?php the_field('welcome_section') ?></p>
               
        </div>
    </div>
</div>






<?php get_footer()?>