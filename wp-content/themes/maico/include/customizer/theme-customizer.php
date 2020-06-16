<?php 
    // sections
    require get_template_directory().'/include/customizer/social.php';
    require get_template_directory().'/include/customizer/endereco.php';

    
    function m_customize_register($wp_customize) {

        m_social_customizer($wp_customize);
        m_endereco_customizer($wp_customize);

    }
?>