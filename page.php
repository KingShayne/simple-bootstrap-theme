<?php get_header() ?>

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    //$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), "thumbnail");
                    //$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()), "thumbnail");
                    the_post();
                    ?>
                    <article class="col">                  
                        <h2 class="card-title"><?php the_title(); ?>?</h2>
                        <p class="card-text"<?php the_content(); ?></p>  
                    </article>
                <?php
                }
            }
            ?>
        
    </div>
</div>

<?php get_footer(); ?>