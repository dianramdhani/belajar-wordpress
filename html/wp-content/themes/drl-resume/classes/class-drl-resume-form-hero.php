<?php
class Drl_Resume_Form_Hero
{
    public function __construct()
    {
        add_action('customize_register', [$this, 'register_customizer_form']);
    }

    private function register_customizer_form($wp_customize)
    {
        // add section for theme customizer
        $wp_customize->add_section('drl_customizer_section', array(
            'title' => __('Theme Customizer', 'drl'),
            'description' => sprintf(__('Theme Customizer Section', 'drl')),
            'priority' => 130
        ));
        // add setting for theme customizer
        $wp_customize->add_setting('drl_customizer_setting', array(
            'default' => '',
            'transport' => 'refresh'
        ));
        // add control for theme customizer
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'drl_customizer_control', array(
            'label' => __('Theme Customizer Control', 'drl'),
            'section' => 'drl_customizer_section',
            'settings' => 'drl_customizer_setting',
            'type' => 'text'
        )));
    }
}
