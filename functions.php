

<?php
if(! isset($content_width)) {
$content_width = 660;
}

function tranquilwp_setup() {
  load_theme_textdomain('apple wp', get_template_directory() . '/languages');
add_theme_support ('automatic-feed-links');
add_theme_support ('title-tag');
add_theme_support('post-thumbnails');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Main header menu', 'apple wp' ),
) );
}

/**
 * Register Custom Navigation Walker
 */

	

add_action('after_setup_theme', 'tranquilwp_setup');

function tranquil_scripts(){
    wp_enqueue_style('bootstrap-core',get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome',get_template_directory_uri() .'/css/font awesome/css/all.min.css');
    wp_enqueue_style('custom',get_template_directory_uri() .'/style.css');
    
    wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);
    
    if( is_singular()
    && comments_open()
    && get_option('thread_comments')  
) {
  wp_enqueue_script('comment-reply');
}   
}
    add_action('wp_enqueue_scripts','tranquil_scripts');

function new_excerpt_text() {
 return '...';
}
add_filter('excerpt_more','new_excerpt_text');

function featureText() {
    if( is_front_page() )  {
     the_field('header_text'); }
     else {
        esc_html_e("Welcome to Tin's site","apple wp");
      }
    }

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="py-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


$args = array(
  'width' => 2600,
  'height' => 900,
  'default-image' => get_template_directory_uri() . '/image/background.jpg',
  'uploads' => true
);
add_theme_support('custom-header', $args);

register_default_headers( array(
    'nature2' => array(
      'url' => get_template_directory_uri() . '/image/background.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/image/background.jpg',
      'description' => __(' Background 1')
    ),
    'nature3' => array(
      'url' => get_template_directory_uri() . '/image/nature3.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/image/nature3.jpg',
      'description' => __(' Background 2 ')
    ),
  ));


?>