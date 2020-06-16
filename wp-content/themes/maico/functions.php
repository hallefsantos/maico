<?php 
// Incluir outros arquivos/functions
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';


// Hooks
add_action('wp_enqueue_scripts', 'm_theme_styles');
add_action('after_setup_theme', 'm_after_setup');
add_action('widgets_init', 'm_widgets');
add_action('customize_register', 'm_customize_register');
