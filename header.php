<?php
/**
 * The template for displaying the header
 *
 * @package CustomeTheme
 * @since Custom Theme 1.0
 */
?>
<!DOCTYPE html>
<html <?php get_language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="google-site-verification" content="CTiy52mZTQlX3_wD4LCqyXIFK0QDoJI-7vF7FsbUE0g" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?> >
        