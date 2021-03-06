<?php get_header(); ?>
<!-- .main -->
<div id="main" class="main" role="main">
    <div class="entry">
        <div class="entry-container">

            <h1 class="entry-title">
                <?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
                if($total_results) {
                    printf(__('%d search results for','tracks'),$total_results);
                } else {
                    _e("No search results for ", 'tracks');
                }
                ?>
                <span>"<?php echo $s ?>"</span>
            </h1>
            <?php get_search_form(); ?>

                <?php
                // The loop
                if ( have_posts() ) :
                    while (have_posts() ) :
                        the_post();
                        get_template_part( 'content-search' );
                    endwhile;
                endif;
                ?>

            <?php if ( current_theme_supports( 'loop-pagination' ) ) loop_pagination(); ?>

            <?php
            // only display bottom search bar if there are search results
            $total_results = $wp_query->found_posts;
            if($total_results) {
                ?>
                <div class="search-bottom">
                    <p>Can't find what you're looking for?  Try refining your search:</p>
                    <?php get_search_form(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div> <!-- .main -->
<?php get_footer(); ?>