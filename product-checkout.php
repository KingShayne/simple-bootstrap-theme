<?php
/**
 * 
 * Template Name: Product Checkout
 * 
 */

get_header();

?>
<div class="container">
    <div class="row">
        <div class="col-12">


            <?php

            echo do_shortcode("[woocommerce_checkout]");

            ?>
        </div>
    </div>
</div>

<?php
get_footer();