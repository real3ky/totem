<?php 
  //Foundation JS
  function rico_load_fundation_js() {

    wp_register_script(
        'foundation-JS',
        'https://cdn.jsdelivr.net/npm/foundation-sites@6.4.3/dist/js/foundation.min.js',
        array('jquery'),
        '6.4.3'
    );
    wp_enqueue_script( 'foundation-JS' );
  }

  add_action( 'wp_enqueue_scripts', 'rico_load_fundation_js' );

  // Foundation CSS
  function rico_load_fundation_css() {  

    wp_register_style(
      'foundation-CSS',
      get_template_directory_uri() . '/css/foundation.css',
      array(),
      '6.4.4'
    );
    wp_enqueue_style( 'foundation-CSS' );

    wp_register_style(
      'foundation-icons',
      get_template_directory_uri() . '/fonts/foundation-icons/foundation-icons.css',
      array(),
      '3.0.0'
    );
    wp_enqueue_style( 'foundation-icons' );

    wp_register_style(
      'motion-ui',
      'https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css',
      array(),
      '1.2.3'
    );
    wp_enqueue_style( 'motion-ui' );
  }
  add_action( 'wp_enqueue_scripts', 'rico_load_fundation_css' );

// Shortcode for Products row
function rico_products_shortcode( $attr ) {
  $categoria = $attr['categoria'];
  ob_start();
  set_query_var( 'categoria', $categoria );
  get_template_part( 'parts/get-posts' );
  return ob_get_clean();
}
add_shortcode( 'products', 'rico_products_shortcode' );


// Strip Gallery

function rico_filter_modal_content($content) {
  
  if (is_singular('html5-blank')) :
    remove_shortcode('gallery' );
    $content = preg_replace("`\[[^\]]*\]`","", $content);
  endif;
  return $content;
}

add_filter( 'the_content', 'rico_filter_modal_content' ); 


?>
