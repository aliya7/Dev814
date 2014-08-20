<?php get_header(); ?>
<!-- .main -->
<div id="main" class="main post-container" role="main">
<?php

// The loop
if ( have_posts() ) :
    while (have_posts() ) :
        the_post();
        get_template_part( 'content' );
        comments_template();
    endwhile;
endif;
?>
</div> <!-- .main -->
<?php get_footer(); ?>