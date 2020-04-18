
<?php
/*
* The template for displaying footer
*/

?>
<footer class="container-fluid py-5 ">
        <div class="row text-center">
            <div class="col-md-6 offset-md-3 ">
            <h1 class="display-5">Connect</h1>
            <hr>
            </div>
           
        
            <div class="col-md-12 icons">
            <a href="https://linkedin.com/in/tin-do2003">  <i class="fab fa-linkedin"></i> </a>
            <a href="https://github.com/tindo2003">    <i class="fab fa-github"></i> </a>



            </div>
            <div class="col-md-6 offset-md-3 ">
                <p class="py-2"> <?php the_field('footer_section') ?> </p>
        </div>
    </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script src="js/bootstrap.min.js"> </script>
    <?php wp_footer(); ?>
</body>

</html>