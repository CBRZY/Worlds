<?php
/**
 * The main template file
 *
 * @package WorldsTheme
 * @since Worlds Theme 1.0
 */
 ?>

<?php get_header( ); ?>
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-12" >
            <?php
                if (get_theme_mod( 'show_logo' )) { 
                    get_template_part( 'landing', 'logo' ); 
                }
            ?>
            <?php get_template_part( 'landing', 'background' ); ?>
            <?php 
                if (get_theme_mod( 'show_worlds' )){
                    get_template_part( 'landing', 'worlds' ); 
                }
            ?>
        </div>
    </div><!-- .row -->
</div><!-- .container-fluid -->

<?php get_footer( ); ?>