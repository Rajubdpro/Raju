<?php
/**
 * My Theme function
 */
    // Menu Register
    register_nav_menu( 'main_menu', __('Main Menu', 'raju'));
    class raju_theme{

    function __construct(){
         //Add Theme title
        add_theme_support('title-tag');
        //Add css and js file calling
        add_action('wp_enqueue_scripts', [$this, 'raju_css_js_file_calling']);
        //Add  google fonts
        add_action('wp_enqueue_scripts', [$this, 'ali_add_google_fonts']);
        // Add customize regster
        add_action('customize_register', [$this, 'raju_customizar_ragister']);

    }

//Theme css and Jquery file calling
function raju_css_js_file_calling(){

    wp_enqueue_style('raju_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //Jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory().'js/bootstrap.js', array(), '5.0.2', 'true' );
    wp_enqueue_script('main', get_template_directory().'js/main.js', array(), '1.0.0', 'true');
}

// Google Fonts Enqueue
function ali_add_google_fonts(){
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }


  //Theme Function
function raju_customizar_ragister($wp_customize){

    // Header area function
    $wp_customize->add_section('raju_header_area', array(
        'title' =>__('Header Area', 'raju'),
        'description' => 'If you instersted header area, you can do it here.',
    ));

    $wp_customize->add_setting('raju_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'raju_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you change update your logo, you can do it here.',
        'setting' => 'raju_logo',
        'section' => 'raju_header_area'
    )));

      // Menu Position Option
  $wp_customize->add_section('raju_menu_option', array(
    'title' => __('Menu Position Option', 'raju'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('raju_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('raju_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'raju_menu_position',
    'section' => 'raju_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));

        // Footer Position Option
        $wp_customize->add_section('raju_footer_option', array(
            'title' => __('Footer Option', 'raju'),
            'description' => 'If you interested to change and update your footer option you can do it here.'
          ));
        
          $wp_customize->add_setting('raju_copyright_section', array(
            'default' => '&copy; Copyright 2023 | Rajubdpro',
          ));
        
          $wp_customize-> add_control('raju_copyright_section', array(
            'label' => 'Copyright text',
            'description' => 'If you interested to change and update your footer option you can do it here.',
            'setting' => 'raju_copyright_section',
            'section' => 'raju_footer_option',
          ));
}
}
new raju_theme();
