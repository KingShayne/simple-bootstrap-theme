<?php get_header() ?>

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <div id="products-new-arrivals">
                <h3>New Arrivals</h3>
                <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" class="new-arrival-custom-class"]'); ?>
            </div>
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    //$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), "thumbnail");
                    //$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()), "thumbnail");
                    the_post();
                    ?>
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                                alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title"><?php the_title(); ?>?</h2>
                            <p class="card-text"<?php the_content(); ?></p>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more →</a>
                        </div>
                    </div>

                <?php
                }
            }
            ?>
            <!-- Featured blog post-->

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..."
                            aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use,
                    and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>