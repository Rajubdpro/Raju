<?php
//Theme Function
function raju_customizar_ragister($wp_customize)
{

  // Header area function
  $wp_customize->add_section('raju_header_area', array(
    'title' => __('Header Area', 'raju'),
    'description' => 'If you instersted header area, you can do it here.',
  ));

  $wp_customize->add_setting('raju_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'raju_logo', array(
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

  $wp_customize->add_control('raju_menu_position', array(
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

  $wp_customize->add_control('raju_copyright_section', array(
    'label' => 'Copyright text',
    'description' => 'If you interested to change and update your footer option you can do it here.',
    'setting' => 'raju_copyright_section',
    'section' => 'raju_footer_option',
  ));

// Theme Color
$wp_customize-> add_section('raju_colors', array(
  'title' => __('Theme Color', 'raju'),
  'description' => 'If need you can change your theme color.',
));

$wp_customize ->add_setting('raju_bg_color', array(
  'default' => '#ffffff',
));
$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'raju_bg_color', array(
  'label' => 'Background Color',
  'section' => 'raju_colors',
  'settings' => 'raju_bg_color',
)));
$wp_customize ->add_setting('raju_primary_color', array(
  'default' => '#ea1a70',
));
$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'raju_primary_color', array(
  'label' => 'Primary Color',
  'section' => 'raju_colors',
  'settings' => 'raju_primary_color',
)));


function raju_theme_color_cus(){
?>
<style>
  body{background: <?php echo get_theme_mod('raju_bg_color'); ?>}
  :root{ --pink:<?php echo get_theme_mod('raju_primary_color'); ?>}
</style>
<?php 
}
add_action('wp_head', 'raju_theme_color_cus');
}

  // Add customize regster
  add_action('customize_register', 'raju_customizar_ragister');
