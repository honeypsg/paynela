<?php
if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

//add_theme_support('post-thumbnails', ['post', 'page']);
add_theme_support('title-tag');

if (function_exists('acf_add_options_page')) {
  acf_add_options_page('Theme Settings');
}
function get_theme_version_number() {
    $theme = wp_get_theme();
    return $theme->get('Version');
}
/**
 * Proper way to enqueue scripts and styles
 */
 
 function enqueue_google_fonts() {
     // Add preconnect links for Google Fonts
     echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . PHP_EOL;
     echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . PHP_EOL;
 }
add_action( 'wp_head', 'enqueue_google_fonts' );
function bootstrap_theme_scripts_styles()
{
 $filename = get_stylesheet_directory().'/style.css';
  wp_enqueue_style(
    'bootstrap-css',
    get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css',[],'5.3.0'
  );
  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&#038;display=swap', array(), null );
  wp_enqueue_script(
    'bootstrap-js',
    get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.bundle.min.js',
    ['jquery'],
    '5.3.0',
    true
  );
  wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime($filename));

  wp_enqueue_script(
    'site-script',
    get_template_directory_uri() . '/inc/jquery.site.script.js',
    ['jquery'],
    get_theme_version_number(),
    true
  );
}

add_action('wp_enqueue_scripts', 'bootstrap_theme_scripts_styles');

function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

function shared_editor()
{
  wp_enqueue_style(
    'shared-editor-css',
    get_template_directory_uri() . '/editor-style-shared.css'
  );
}
add_action('wp_enqueue_scripts', 'shared_editor');

function wpdocs_theme_add_editor_styles()
{
  wp_enqueue_style('admin-css', get_template_directory_uri() . '/admin.css');
  add_editor_style('editor-style-shared.css');
  add_editor_style('inc/bootstrap/bootstrap.min.css');
}
add_action('admin_init', 'wpdocs_theme_add_editor_styles');

/* Add classes to body */
function add_slug_body_class($classes)
{
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_slug_body_class');

/* Basic Menus */
function register_my_menus()
{
  register_nav_menus([
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
  ]);
}
//add_action('init', 'register_my_menus');

function custom_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter( 'image_editor_output_format', function( $formats ) {
  $formats['image/jpeg'] = 'image/webp';
  return $formats;
} );

function redirect_404_to_front_page() {
    if (is_404()) {
        wp_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'redirect_404_to_front_page');

function wpf_dev_event_after_submit() {
  ?>

   <script type="text/javascript">
           ( function() {
               jQuery( window ).on( 'load', function() {

                   // Change your form ID or replace it to the .wpforms-form container.
                   jQuery( '#wpforms-form-94' ).on( 'wpformsAjaxSubmitSuccess', function( e, response ) {
           // replace the URL here
                      jQuery('#contactModalLabel').css('display','none');
                   } );

               } )

           }() );

   </script>

  <?php
}
add_action( 'wpforms_wp_footer_end', 'wpf_dev_event_after_submit', 10 );