<?php get_header(); ?>
<!-- .main -->
<div id="main" class="main page-container" role="main">
<?php

// The loop
if ( have_posts() ) :
    while (have_posts() ) :
        the_post();
        get_template_part( 'content-page' );
        comments_template();
    endwhile;
endif;
?>
</div> <!-- .main -->
<?php get_footer(); ?>