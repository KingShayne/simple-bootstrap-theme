<?php

//remove_action("woocommerce_sidebar", "woocommerce_get_sidebar", 10);


// <div class="container"><div class="row"></div></div>
function open_container_row_div_classes()
{
    echo "<div class='container'><div class='row'>";
}

add_action("woocommerce_before_main_content", "open_container_row_div_classes", 5);

function close_container_row_div_classes()
{
    echo "</div></div>";
}

add_action("template_redirect", "load_template_layout");

function load_template_layout()
{
    // If its shop page
    if (is_shop()) {

        // <div class="col-sm-4"></div>

        add_action("woocommerce_after_main_content", "close_container_row_div_classes", 5);

        add_action("woocommerce_before_main_content", "open_sidebar_column_grid", 6);
        function open_sidebar_column_grid()
        {
            echo "<div class='col-sm-4'>";
        }

        add_action("woocommerce_before_main_content", "woocommerce_get_sidebar", 6);

        add_action("woocommerce_before_main_content", "close_sidebar_column_grid", 6);

        function close_sidebar_column_grid()
        {
            echo "</div>";
        }

        // <div class="col-sm-8"></div>
        add_action("woocommerce_before_main_content", "open_product_column_grid", 9);

        function open_product_column_grid()
        {
            echo "<div class='col-sm-8'>";
        }

        add_action("woocommerce_before_main_content", "close_product_column_grid", 10);

        function close_product_column_grid()
        {
            echo "</div>";
        }
    }
}

add_filter("woocommerce_show_page_title", "toggle_page_title");

function toggle_page_title($val)
{
    $val = false;
    return $val;
}

//add_action("woocommerce_after_shop_loop_item_title", "the_excerpt");

// Removing breadcrumbs 
remove_action("woocommerce_before_main_content","woocommerce_breadcrumb", 20);

// Removing result count 
remove_action("woocommerce_before_shop_loop","woocommerce_result_count", 20);

// Remove ordering dropdown 
remove_action("woocommerce_before_shop_loop","woocommerce_catalog_ordering", 30);
?>