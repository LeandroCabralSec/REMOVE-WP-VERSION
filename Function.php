Coloque o código na Function.php

/** # TIRAR A VERSÃO DO WORDPRESS # */
// Remove WP Version From Styles 
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP verson from meta tag
add_filter('the_generator', 'sdt_remove_version');

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
 if ( strpos( $src, 'ver=' ) )
  $src = remove_query_arg( 'ver', $src );
 return $src;
}

// Remove WP verson from meta tag 
function sdt_remove_version() {
 return '';
}
