<!-- <label for="search">Search in <?php echo home_url( '/' ); ?></label> -->
<!-- <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" /> -->

<form role="search" action="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Enter search term..."
            aria-label="Enter search term..." aria-describedby="button-search" value="<?php the_search_query(); ?>" />
        <button class="btn btn-primary search-submit" id="button-search" type="submit">Go!</button>
        <!-- <input type="hidden" value="product" name="post_type" id="post_type" /> -->
    </div>

</form>