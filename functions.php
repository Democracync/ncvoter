<?php
// Sidebar
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'before_widget' => '<div class="sidebar-item">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="sidebar-header">',
    'after_title' => '</h3>',
  ));
}

/**
 * Enqueue TypeKit Fonts
 */
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/flo4ozt.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );

function custom_scripts() {
  wp_register_script( 'custom_scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
  wp_enqueue_script('custom_scripts');
}
add_action( 'wp-enqueue_scripts', 'custom-scripts');

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
}

//Activate the Link Manager built in to the WordPress admin
  add_filter( 'pre_option_link_manager_enabled', '__return_true' );

?>
