<?php
/**
 * Main Logo for landing page
 *
 * @package WorldsTheme
 * @since Worlds Theme 1.0
 */
 ?>

<article>
    <?php if (get_theme_mod( 'main_logo_image' )) {?>
        <img class="centered" src="<?php echo get_theme_mod( 'main_logo_image' ); ?>">
    <?php } elseif (get_theme_mod( 'main_logo_title' )) { ?>
        <h1 class="main-heading"><?php echo get_theme_mod( 'main_logo_title' ); ?></h1>
    <?php } else { ?>
        <h1 class="main-heading"><?php bloginfo( 'name' ) ?></h1>
    <?php } ?>
</article>