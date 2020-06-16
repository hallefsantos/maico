<?php 

    function m_endereco_customizer($wp_customize){

        // settings
        $wp_customize->add_setting('m_endereco', array('default'=>''));
        $wp_customize->add_setting('m_cidade', array('default'=>''));
        $wp_customize->add_setting('m_email', array('default'=>''));
        $wp_customize->add_setting('m_email_two', array('default'=>''));
        $wp_customize->add_setting('m_telefone', array('default'=>''));
        $wp_customize->add_setting('m_whatsapp', array('default'=>''));


        // Sections
        $wp_customize->add_section('m_endereco_section', array(
            'title' => 'Endereços/Telefones',
            'priority' => 999999
        ));

        // Controllers

        // Endereço
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_endereco',
                array(
                    'label' => 'Endereço',
                    'section' => 'm_endereco_section',
                    'settings' => 'm_endereco',
                    'type' => 'text'
                )
            )
        );

        // Endereço
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_cidade',
                array(
                    'label' => 'Cidade / Estado',
                    'section' => 'm_endereco_section',
                    'settings' => 'm_cidade',
                    'type' => 'text'
                )
            )
        );

        // Email 
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_email',
                array(
                    'label' => 'Email',
                    'section' => 'm_endereco_section',
                    'settings' => 'm_email',
                    'type' => 'text'
                )
            )
        );

        // Email Alternativo
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_email_two',
                array(
                    'label' => 'Endereço Alternativo',
                    'section' => 'm_endereco_section',
                    'settings' => 'm_email_two',
                    'type' => 'text'
                )
            )
        );

        // Telefone
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'm_telefone',
                array(
                    'label' => 'Telefone',
                    'section' => 'm_endereco_section',
                    'settings' => 'm_telefone',
                    'type' => 'text'
                )
            )
        );

        // Whatsapp
        $wp_customize->add_control(
         new WP_Customize_Control(
             $wp_customize,
             'm_whatsapp',
             array(
                 'label' => 'Whatsapp',
                 'section' => 'm_endereco_section',
                 'settings' => 'm_whatsapp',
                 'type' => 'text'
             )
         )
     );

    }
?>