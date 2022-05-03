<?php

function drl_resume_enqueue_scripts()
{
    $prefix = 'drl-resume-';

    wp_enqueue_style($prefix . 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style($prefix . 'bootstrap', get_template_directory_uri() . "/assets/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style($prefix . 'bootstrap-icons', get_template_directory_uri() . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
    wp_enqueue_style($prefix . 'boxicons', get_template_directory_uri() . "/assets/vendor/boxicons/css/boxicons.min.css");
    wp_enqueue_style($prefix . 'glightbox', get_template_directory_uri() . "/assets/vendor/glightbox/css/glightbox.min.css");
    wp_enqueue_style($prefix . 'remixicon', get_template_directory_uri() . "/assets/vendor/remixicon/remixicon.css");
    wp_enqueue_style($prefix . 'swiper', get_template_directory_uri() . "/assets/vendor/swiper/swiper-bundle.min.css");
    wp_enqueue_style($prefix . 'theme', get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_style($prefix . 'style', get_stylesheet_uri());


    // enqueue scripts
    wp_enqueue_script($prefix . 'purecounter', get_template_directory_uri() . "/assets/vendor/purecounter/purecounter.js", array(), '', true);
    wp_enqueue_script($prefix . 'bootstrap', get_template_directory_uri() . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", array(), '', true);
    wp_enqueue_script($prefix . 'glightbox', get_template_directory_uri() . "/assets/vendor/glightbox/js/glightbox.min.js", array(), '', true);
    wp_enqueue_script($prefix . 'isotope', get_template_directory_uri() . "/assets/vendor/isotope-layout/isotope.pkgd.min.js", array(), '', true);
    wp_enqueue_script($prefix . 'swiper', get_template_directory_uri() . "/assets/vendor/swiper/swiper-bundle.min.js", array(), '', true);
    wp_enqueue_script($prefix . 'waypoints', get_template_directory_uri() . "/assets/vendor/waypoints/noframework.waypoints.min.js", array(), '', true);
    wp_enqueue_script($prefix . 'php-email-form', get_template_directory_uri() . "/assets/vendor/php-email-form/validate.js", array(), '', true);
    wp_enqueue_script($prefix . 'theme', get_template_directory_uri() . "/assets/js/main.js", array(), '', true);
}
add_action('wp_enqueue_scripts', 'drl_resume_enqueue_scripts');

require_once get_template_directory() . '/classes/class-drl-resume-customizers.php';
new Drl_Resume_Customizers();
