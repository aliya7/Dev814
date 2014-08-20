<?php get_header(); ?>
<!-- .main -->
<div id="main" class="main archive-container" role="main"> 
<?php

// The loop
if ( have_posts() ) :
    while (have_posts() ) :
        the_post();
        get_template_part('content');
    endwhile;
endif; ?>

<?php ct_tracks_post_navigation(); ?>
</div> <!-- .main -->
<?php get_footer(); ?>