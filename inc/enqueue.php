<?php

//Theme css and Jquery file calling
function raju_css_js_file_calling()
{
  //CSS
  wp_enqueue_style('raju_style', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('custom');
  //Jquery
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory() . 'js/bootstrap.js', array(), '5.0.2', 'true');
  wp_enqueue_script('main', get_template_directory() . 'js/main.js', array(), '1.0.0', 'true');
}

  //Add css and js file calling
  add_action('wp_enqueue_scripts', 'raju_css_js_file_calling');

// Google Fonts Enqueue
function raju_add_google_fonts()
{
  wp_enqueue_style('raju_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
}
//Add  google fonts
add_action('wp_enqueue_scripts', 'raju_add_google_fonts');
