<?php
/**
 * The template for displaying the footer
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<footer class="footer" id="">
    <div class="container-fluid">
        <?php
            $default = sprintf(
                __('&copy; %s <a href="https://cbrzy.com/" target="_blank">CBRZY</a> Themes. All Rights Reserved.'),
                esc_html(date('Y'))
            );
        ?>
        <div class="col-lg-6 footer-copyright">
            <span class="copyright"><?php echo ( $default ); ?></span>
        </div><!-- .col-lg-6 -->
        
        <div id="ig-social" class="col-lg-6 footer-social">
            <?php if(get_theme_mod('houzz')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('houzz')); ?>" target="_blank">
                    <i class="icon-houzz-footer fa fa-houzz"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('tripadvisor')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('tripadvisor')); ?>" target="_blank">
                    <i class="icon-tripadvisor-footer fa fa-tripadvisor"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('snapchat')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('snapchat')); ?>" target="_blank">
                    <i class="icon-snapchat-footer fa fa-snapchat-ghost"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('rss')) : ?>
                <a href="<?php echo esc_url(get_theme_mod('rss')); ?>" target="_blank">
                    <i class="icon-rss-footer fa fa-rss"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('linkedin')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('linkedin')); ?>" target="_blank">
                    <i class="icon-linkedin-footer fa fa-linkedin"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('vimeo')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('vimeo')); ?>" target="_blank">
                    <i class="icon-vimeo-footer fa fa-vimeo-square"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('soundcloud')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('soundcloud')); ?>" target="_blank">
                    <i class="icon-soundcloud-footer fa fa-soundcloud"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('dribbble')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('dribbble')); ?>" target="_blank">
                    <i class="icon-dribbble-footer fa fa-dribbble"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('youtube')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('youtube')); ?>" target="_blank">
                    <i class="icon-youtube-footer fa fa-youtube-play"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('tumblr')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('tumblr')); ?>" target="_blank">
                    <i class="icon-tumblr-footer fa fa-tumblr"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('googleplus')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('google')); ?>" target="_blank">
                    <i class="icon-googleplus-footer fa fa-google-plus"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('bloglovin')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('bloglovin')); ?>" target="_blank">
                    <i class="icon-bloglovin-footer fa fa-heart"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('pinterest')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('pinterest')); ?>" target="_blank">
                    <i class="icon-pinterest-footer fa fa-pinterest"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('instagram')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('instagram')); ?>" target="_blank">
                    <i class="icon-instagram-footer fa fa-instagram"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('twitter')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('twitter')); ?>" target="_blank">
                    <i class="icon-twitter-footer fa fa-twitter"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('facebook')) : ?>
                <a href="<?php echo esc_html(get_theme_mod('facebook')); ?>" target="_blank">
                    <i class="icon-facebook-footer fa fa-facebook"></i>
                </a>
            <?php endif; ?>
            <?php if(get_theme_mod('email')) : ?>
                <a href="mailto:<?php echo esc_html(get_theme_mod('email')); ?>">
                    <i class="icon-mail-footer fa fa-envelope-o"></i>
                </a>
            <?php endif; ?>
            
    </div><!-- .col-lg-6 .footer-social -->
    </div>    
</footer>      

<?php wp_footer(); ?>
</body>
</html>