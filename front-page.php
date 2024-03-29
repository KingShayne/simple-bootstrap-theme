<?php get_header() ?>

<!-- Page content-->
<div class="container my-2">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-12">
            <div id="products-new-arrivals">
                <h3 class="text-center my-4">New Arrivals</h3>
                <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" class="new-arrival-custom-class"]'); ?>
            </div>


            <div id="products-popularity">
                <h3 class="text-center my-4">Popular</h3>
                <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="new-arrival-custom-class"]'); ?>
            </div>

            <div id="products-onsale">
                <h3 class="text-center my-4">Sale</h3>
                <?php echo do_shortcode('[products limit="4" columns="4" on_sale="true" class="new-arrival-custom-class"]'); ?>
            </div>

            <!-- Featured blog post-->
                

        </div>
        <!-- Side widgets-->

    </div>
</div>

<?php get_footer(); ?>