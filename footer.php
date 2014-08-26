<footer class="site-footer" role="contentinfo">
   
    <?php if(get_bloginfo('description') && ( get_theme_mod('tagline_display_setting') == 'header-footer' ) || ( get_theme_mod('tagline_display_setting') == 'footer' )){ ?>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    <?php } ?>
    <?php
        // add footer menu if set
        get_template_part( 'menu', 'footer' );
    ?>
    <?php
        // add social icons if set
        if( (get_theme_mod('social_icons_display_setting') == 'header-footer') || (get_theme_mod('social_icons_display_setting') == 'footer')){
            ct_tracks_social_icons_output();
        }
    ?>
    
</footer>
<button id="return-top" class="return-top">
    <i class="fa fa-arrow-up"></i>
</button>

</div><!-- .overflow-container -->

<?php wp_footer(); ?>
</body>
</html>