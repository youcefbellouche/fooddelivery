<?php
class Fd_Theme_Custom_Setup
{
    public static function custom_theme_init()
    {
        $primary_color = get_theme_mod( 'primary_color','#088585' );
        $secondary_color = get_theme_mod( 'secondary_color','#088585' );


        // DYNAMIQUE CSS
        $custom_css = "
        :root{
            --primary-color:{$primary_color};
            --secondary-color:{$secondary_color};
           
        }
    ";
        wp_add_inline_style( 'fd-main-styles', $custom_css );
    }
}
