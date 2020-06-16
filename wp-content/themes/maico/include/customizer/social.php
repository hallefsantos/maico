<?php 

    function m_social_customizer($wp_customize){

        // settings
        $wp_customize->add_setting('m_facebook', array('default'=>''));
        $wp_customize->add_setting('m_instagram', array('default'=>''));
        $wp_customize->add_setting('m_instagram_two', array('default'=>''));
        $wp_customize->add_setting('m_pinterest', array('default'=>''));


        // Sections
        $wp_customize->add_section('m_social_section', array(
            'title' => 'Redes Sociais',
            'priority' => 999999
        ));

        // Controllers

        // Facebook
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_facebook',
                array(
                    'label' => 'Link do Facebook',
                    'section' => 'm_social_section',
                    'settings' => 'm_facebook',
                    'type' => 'text'
                )
            )
        );

        // Instagram
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_instagram',
                array(
                    'label' => 'Link do Instagram',
                    'section' => 'm_social_section',
                    'settings' => 'm_instagram',
                    'type' => 'text'
                )
            )
        );

        // Instagram 02
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_instagram_two',
                array(
                    'label' => 'Link do segundo Instagram',
                    'section' => 'm_social_section',
                    'settings' => 'm_instagram_two',
                    'type' => 'text'
                )
            )
        );

        // Pinterest
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_pinterest',
                array(
                    'label' => 'Link do Pinterest',
                    'section' => 'm_social_section',
                    'settings' => 'm_pinterest',
                    'type' => 'text'
                )
            )
        );
    }
?>