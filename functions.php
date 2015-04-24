<?php
/**
 * Enqueue TypeKit Fonts
 */
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/flo4ozt.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?><?php } } add_action( 'wp_head', 'theme_typekit_inline' );
?>
