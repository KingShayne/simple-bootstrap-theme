<?php
/**
 * 
 * Template Name: Product Cart
 * 
 */

get_header();

?>
<div class="container">
    <div class="row">
        <div class="col-12">


            <?php

            echo do_shortcode("[woocommerce_cart]");

            ?>
        </div>
    </div>
</div>

<?php
get_footer();