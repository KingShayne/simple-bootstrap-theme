<?php
function simple_bootstrap_theme_load_scripts()
{

    wp_enqueue_style("bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), "5.3.2", 'all');
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), "4.7.0", 'all');
    wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", array(), "1.11.3", 'all');
    wp_enqueue_style("styles", get_template_directory_uri() . "/assets/css/styles.css", array(), "1.0", 'all');
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css", array(), "1.0", 'all');

    wp_enqueue_script("bootstrap-js", 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true);
    
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

    add_theme_support("custom-logo",array(
        'width' => 159,
        'height' => 60,
        'flex-width' => true,
        'flex-height' => true
    ));
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


/**
 * Footer widget one 
 */
function custom_footer_widget_one(){
    $args = array(
        'id'            => 'footer_widget_col_one',
        'name'          => __('Footer Column One', 'text_domain'),
        'description'   => __('Column One', 'text_domain'),
        'before_title'  => '<p class="title">',
        'after_title'   => '</p>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    );

    register_sidebar($args);

}

add_action('widgets_init','custom_footer_widget_one');

/**
 * Footer widget two 
 */
function custom_footer_widget_two(){
    $args = array(
        'id'            => 'footer_widget_col_two',
        'name'          => __('Footer Column Two', 'text_domain'),
        'description'   => __('Column Two', 'text_domain'),
        'before_title'  => '<p class="title">',
        'after_title'   => '</p>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    );

    register_sidebar($args);

}

add_action('widgets_init','custom_footer_widget_two');

/**
 * Footer widget three 
 */
function custom_footer_widget_three(){
    $args = array(
        'id'            => 'footer_widget_col_three',
        'name'          => __('Footer Column Three', 'text_domain'),
        'description'   => __('Column Three', 'text_domain'),
        'before_title'  => '<p class="title">',
        'after_title'   => '</p>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    );

    register_sidebar($args);

}

add_action('widgets_init','custom_footer_widget_three');


/**
 * Footer widget four 
 */
function custom_footer_widget_four(){
    $args = array(
        'id'            => 'footer_widget_col_four',
        'name'          => __('Footer Column Four', 'text_domain'),
        'description'   => __('Column Four', 'text_domain'),
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    );

    register_sidebar($args);

}

add_action('widgets_init','custom_footer_widget_four');

/**
 * Footer widget Five 
 */
function custom_footer_widget_five(){
    $args = array(
        'id'            => 'footer_widget_col_five',
        'name'          => __('Footer Column Five', 'text_domain'),
        'description'   => __('Column Five', 'text_domain'),
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    );

    register_sidebar($args);

}

add_action('widgets_init','custom_footer_widget_five');

?>