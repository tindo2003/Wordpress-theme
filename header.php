<?php
/*
*  The header for our theme
*/

?>

<!doctype html>
<html <?php language_attributes();?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/custom.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="css/font awesome/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap">


   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php echo get_bloginfo ('name') ?> </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#hello">
                <span class="navbar-toggler-icon"></span>
            </button>

            

              
        <?php wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse justify-content-end',
    'container_id'    => 'hello',
    'menu_class'      => 'navbar-nav ',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>



                

           



        </nav>

       
    </header>