<?php
class Drl_Resume_Customizers
{
    public function __construct()
    {
        add_action('customize_register', [$this, 'hero_customizer']);
        add_action('customize_register', [$this, 'background_customizer']);
    }

    public function hero_customizer($wp_customize)
    {
        $section = 'hero';
        $wp_customize->add_section($section, array(
            'title' => __('Hero', 'drl'),
            'description' => sprintf(__('Hero Section', 'drl')),
        ));

        $this->generate_control($wp_customize, $section, 'name', 'Name', 'text', 'Emily Jones');
        $this->generate_control($wp_customize, $section, 'passion', 'Passion', 'text', 'Web Developer');
        $this->generate_control($wp_customize, $section, 'from', 'From', 'text', 'London');
        $this->generate_control($wp_customize, $section, 'twitter', 'Twitter', 'text', '');
        $this->generate_control($wp_customize, $section, 'facebook', 'Facebook', 'text', '');
        $this->generate_control($wp_customize, $section, 'instagram', 'Instagram', 'text', '');
        $this->generate_control($wp_customize, $section, 'linkedin', 'LinkedIn', 'text', '');
    }

    public function background_customizer($wp_customize)
    {
        $section = 'background';
        $wp_customize->add_section($section, array(
            'title' => __('Bakcground', 'drl'),
        ));
        $wp_customize->add_setting($section, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $section, array(
            'label' => __('Background Image', 'drl'),
            'section' => $section,
            'settings' => $section,
        )));
    }

    private function generate_control($wp_customize, $section, $setting, $label, $type, $default)
    {
        $_setting = $section . '_' . $setting;
        $wp_customize->add_setting($_setting, array(
            'default' => $default,
            'transport' => 'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, $_setting, array(
            'label' => $label,
            'section' => $section,
            'settings' => $_setting,
            'type' => $type
        )));
    }
}
