<?php
    //Loading in stylesheets needed for Worlds Theme
    function enqueue_worlds_styles(){
        wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery') );
        wp_enqueue_script( 'fontawesome-js', '//use.fontawesome.com/24e9161afb.js', array('jquery') );

        wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
        wp_enqueue_style( 'worldsthemestyle', get_stylesheet_uri() );
        wp_enqueue_style( 'worldsstyle', get_template_directory_uri() . '/assets/styles/worlds.css' );
    }
    //Add an action (method) to the wp_head Hook
    add_action( 'wp_head', 'enqueue_worlds_styles' );

    //Loading in scripts needed for Worlds Theme
    function enqueue_worlds_scripts() {
        // wp_enqueue_script('rondell',
        //     get_template_directory_uri() . '/assets/js/jquery.rondell.js', 
        //     array( 'jquery' ),
        //     '1.0',
        //     true
        // ); 
        // wp_enqueue_script('rondell_init',
        //     get_template_directory_uri() . '/assets/js/rondel_init.js', 
        //     array( 'jquery' ),
        //     '1.0',
        //     true
        // ); 
    }
    //Add an action (method) to the wp_enqueue_scripts Hook
    add_action( 'wp_enqueue_scripts', 'enqueue_worlds_scripts' );

    /**
     * Customizer
     */
    locate_template(array('inc/customizer.php'), true);

?>