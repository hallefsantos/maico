<?php 

function m_theme_styles() {

    /* CSS  FILES ========================================= */
    wp_enqueue_style('bootstrap-grid-css', 'https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css');
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/css/swiper.min.css');
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css');
    wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/custom.css', array('bootstrap-grid-css'));
    
    /* JAVASCRIPT  FILES ========================================= */
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/js/swiper.min.js', array(), false, true);
    wp_enqueue_script('scripts-js', get_template_directory_uri().'/assets/js/scripts.js', array(), false, true);
}

function m_after_setup() {
    add_theme_support('menus'); //nas versoes novas não precisa deste código, só o de baixo.

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('post-formats', array('video', 'audio'));
    
    register_nav_menu('primary', 'Menu Primário');
}

function m_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar Lateral',
        'id' => 'bm_sidebar',
        'description' => 'Sidebar Lateral',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));


    register_sidebar(array(
        'name' => 'Sidebar Rodapé',
        'id' => 'bm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));
}
?>