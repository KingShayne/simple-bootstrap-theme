<?php 
    function simple_bootstrap_theme_load_scripts(){

        wp_enqueue_style("styles", get_template_directory_uri() . "/assets/css/styles.css", array(),"1.0", 'all' );
        
        wp_enqueue_script("bootstrap",'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'),'1.0', true );
        wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/scripts.js', array(),'1.0', true );


    }

    add_action("wp_enqueue_scripts","simple_bootstrap_theme_load_scripts");


    // Register navigation. 
    function simple_boostrap_theme_nav_config(){
        register_nav_menus( array(
            "primary_menu_id"=> "Primary Menu (Top Menu)",
            "secondart_menu_id"=> "Secondary Menu (Footer Menu)"
        ));
    }

    add_action("after_setup_theme","simple_boostrap_theme_nav_config");

    add
?>