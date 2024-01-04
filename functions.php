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

    function simple_boostrap_theme_add_li_class($classes, $item, $args){
        $classes[] = "nav-item";
        return $classes;
    }

    add_filter("nav_menu_css_class","simple_boostrap_theme_add_li_class", 1, 3 );

    function simple_boostrap_theme_add_anchor_links($classes, $item, $args){
        $classes['class'] = "nav-link";
        return $classes;
    }

    add_filter("nav_menu_link_attributes","simple_boostrap_theme_add_anchor_links", 1, 3 );
?>