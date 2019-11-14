<?php

function learningWordpress_resources(){
  wp_enqueue_style('css/style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learningWordpress_resources');
 ?>
