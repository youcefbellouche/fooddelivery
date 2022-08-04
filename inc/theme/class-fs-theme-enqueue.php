<?php
class Fd_Theme_Enqueue
{
    function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'fd_register_scripts'));
    }
    function fd_register_scripts()
    {
        /** THEME STYLES */
        wp_enqueue_style('fd-main-styles', get_template_directory_uri() . '/assets/css/style.css', array(), FD_VERSION, 'all');
        wp_enqueue_style('fd-main-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), FD_VERSION, 'all');

        /** THEME SCRIPTS */
        wp_enqueue_script('fd-main-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), FD_VERSION, true);
        wp_enqueue_script('fd-main-owl-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('fd-main-js'), FD_VERSION, true);
        wp_enqueue_script('fd-font-awesome', 'https://kit.fontawesome.com/382df5624e.js', array(), FD_VERSION, true);

        /** CUSTOM THEME INIT */
        Fd_Theme_Custom_Setup::custom_theme_init();
        wp_localize_script('fd-main-js', 'wpData', array(
            'mainFile' => FD_THEME_DIR,
            'mainFileUrl' => FD_THEME_DIR_URL,
            'ajaxurl' => admin_url('admin-ajax.php')
        ));
    }
}
new Fd_Theme_Enqueue;
