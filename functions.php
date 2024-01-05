<?php
function simple_bootstrap_theme_load_scripts()
{

    wp_enqueue_style("bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), "5.3.2", 'all');
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), "4.7.0", 'all');
    wp_enqueue_style("styles", get_template_directory_uri() . "/assets/css/styles.css", array(), "1.0", 'all');
    wp_enqueue_style("style", get_template_directory_uri() . "/assets/css/style.css", array(), "1.0", 'all');

    wp_enqueue_script("bootstrap-js", 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.3', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);

}

add_action("wp_enqueue_scripts", "simple_bootstrap_theme_load_scripts");

// Register navigation. 
function simple_boostrap_theme_nav_config()
{
    register_nav_menus(
        array(
            "primary_menu_id" => "Primary Menu (Top Menu)",
            "secondart_menu_id" => "Secondary Menu (Footer Menu)"
        )
    );

    add_theme_support('post-thumbnails');
    add_theme_support(
        'woocommerce',
        array(
            'thumbnail_image_width' => 150,
            'single_image_width' => 200,
            'product_grid' => array(
                'default_columns' => 10,
                'min_columns' => 2,
                'max_columns' => 3
            )
        )
    );

    add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");
}

add_action("after_setup_theme", "simple_boostrap_theme_nav_config");

function simple_boostrap_theme_add_li_class($classes, $item, $args)
{
    $classes[] = "nav-item";
    return $classes;
}

add_filter("nav_menu_css_class", "simple_boostrap_theme_add_li_class", 1, 3);

function simple_boostrap_theme_add_anchor_links($classes, $item, $args)
{
    $classes['class'] = "nav-link";
    return $classes;
}

add_filter("nav_menu_link_attributes", "simple_boostrap_theme_add_anchor_links", 1, 3);

if(class_exists("Woocommerce")){
    include_once 'includes/wc-modifications.php';
}



?>