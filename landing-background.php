<?php
/**
 * Background Video/Image for landing page
 *
 * @package WorldsTheme
 * @since Worlds Theme 1.0
 */
 ?>

<div class="background">
    <div class="foreground">
        <?php if (get_theme_mod( 'background_video' )) {
                $video_url = get_theme_mod( 'background_video' );
                $pos = strpos($video_url, "=");
                $video_id = substr($video_url, $pos+1);
        ?>
                <iframe
                    class="background-video" 
                    src="https://www.youtube.com/embed/<?php echo $video_id ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php echo $video_id ?>" 
                    frameborder="0" allowfullscreen>
                </iframe>
        <?php } 
        if (get_theme_mod( 'background_image' )) { ?> 
            <img class="background-image" src="<?php echo get_theme_mod( 'background_image' ) ?>">
        <?php } ?>
    </div>
</div>