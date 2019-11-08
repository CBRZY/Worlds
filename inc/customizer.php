<?php
/**
 * Sanitize Text Input
 *
 * @since 1.0
 */
function worlds_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Sanitize int
 *
 * @since 1.0
 */
function worlds_sanitize_integer( $input ) {
	return intval ( $input );
}


/**
 *
 * @since 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
function worlds_customize_register( $wp_customize ) {

	/**
	 * Site Title & Description Section
	 */
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	/**
	 * Worlds News Panel
	 */
	$wp_customize->add_panel( 'worlds_customizer', array(
		'priority'       	=> 10,
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'title'          	=> 'Worlds Theme Options',
		'description'    	=> 'Theme Options for Worlds',
	) );

	/**
     * Logos Section
     */
    $wp_customize->add_section('main_logo_section', array(
        'title' => esc_html__('Logo', 'worlds'),
        'panel' => 'worlds_customizer',
        )
	);
	
	$wp_customize->add_setting('show_logo', array(
		'default'    => '1'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'show_logo',
			array(
				'label'     	=> esc_html__('Show a Logo', 'worlds'),
				'section'   	=> 'main_logo_section',
				'description' 	=> 'Indicates if a logo should be shown. If logo should be shown while Main Logo Image and Main Logo Title is empty, site name will be used',
				'settings'  	=> 'show_logo',
				'type'      	=> 'checkbox',
			)
		)
	);

    $wp_customize->add_setting('main_logo_image', array(
        'sanitize_callback' => 'esc_url_raw',
        )
    );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'main_logo_image', 
		array(
			'section' 		=> 'main_logo_section',
			'label' 		=> esc_html__( 'Main Logo Image', 'worlds' ),
			'description' 	=> 'Uploaded image will be used as main logo',
			'settings' 		=> 'main_logo_image'
        )
	));

	$wp_customize->add_setting( 'main_logo_title',
		array(
			'sanitize_callback' => 'worlds_sanitize_text',
		)
	);
	$wp_customize->add_control( 'main_logo_title',
		array(
			'section'   	=> 'main_logo_section',
			'label'     	=> esc_html__( 'Main Logo Title', 'worlds' ),
			'description' 	=> 'If no image is uploaded, Main Logo Title will be used as main logo',
			'settings'  	=> 'main_logo_title',
			'type'      	=> 'text',
		)
	);
	
	/**
     * Background Section
     */
    $wp_customize->add_section('background_section', array(
        'title' => esc_html__('Background', 'worlds'),
        'panel' => 'worlds_customizer',
        )
    );

    $wp_customize->add_setting('background_video', array(
        'sanitize_callback' => 'worlds_sanitize_text',
        )
    );
	$wp_customize->add_control('background_video', 
		array(
			'section' 		=> 'background_section',
			'label' 		=> esc_html__( 'YouTube URL', 'worlds' ),
			'description' 	=> 'Paste a plain YouTube URL ie https://www.youtube.com/watch?v=sSzFOECOky0',
			'settings' 		=> 'background_video',
			'type'      	=> 'url',
        )
	);
	$wp_customize->add_setting('background_image', array(
        'sanitize_callback' => 'worlds_sanitize_text',
        )
    );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'background_image', 
	array(
		'section' 		=> 'background_section',
		'label' 		=> esc_html__( 'Background Image', 'worlds' ),
		'description' 	=> 'If no video URL has been entered then this image will be the background. Image is ALWAYS needed for mobile displays.',
		'settings' 		=> 'background_image',
	)
	));
	


	/**
     * Worlds Section
     */
    $wp_customize->add_section('worlds_section', array(
        'title' => esc_html__('Worlds', 'worlds'),
        'panel' => 'worlds_customizer',
        )
	);
	
	$wp_customize->add_setting('show_worlds', array(
		'default'    => '1'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'show_worlds',
			array(
				'label'     	=> esc_html__('Show Worlds', 'worlds'),
				'section'   	=> 'worlds_section',
				'description' 	=> 'Indicates if a Worlds (links to locations) should be shown.',
				'settings'  	=> 'show_worlds',
				'type'      	=> 'checkbox',
			)
		)
	);

	// Worlds Left Image
    $wp_customize->add_setting('worlds_image_left', array(
        'sanitize_callback' => 'esc_url_raw',
        )
    );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'worlds_image_left', 
		array(
			'section' 		=> 'worlds_section',
			'label' 		=> esc_html__( 'Left World Image', 'worlds' ),
			'description' 	=> 'Uploaded image will be used as left image',
			'settings' 		=> 'worlds_image_left'
        )
	));
	$wp_customize->add_setting( 'worlds_title_left',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'worlds_title_left',
		array(
			'section'   	=> 'worlds_section',
			'label'     	=> esc_html__( 'Left Image Title', 'worlds' ),
			'description' 	=> 'Text to be displayed with Left Image',
			'settings'  	=> 'worlds_title_left',
			'type'      	=> 'text',
		)
	);	
	$wp_customize->add_setting( 'worlds_url_left',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'worlds_url_left',
		array(
			'section'   => 'worlds_section',
			'label'     => esc_html__( 'Left World URL', 'worlds' ),
			'settings'  => 'worlds_url_left',
			'type'      => 'url',
		)
	);

	// Worlds Centre Image
	$wp_customize->add_setting('worlds_image_centre', array(
        'sanitize_callback' => 'esc_url_raw',
        )
    );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'worlds_image_centre', 
		array(
			'section' 		=> 'worlds_section',
			'label' 		=> esc_html__( 'Centre World Image', 'worlds' ),
			'description' 	=> 'Uploaded image will be used as centre image',
			'settings' 		=> 'worlds_image_centre'
        )
	));
	$wp_customize->add_setting( 'worlds_title_centre',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'worlds_title_centre',
		array(
			'section'   	=> 'worlds_section',
			'label'     	=> esc_html__( 'Centre Image Title', 'worlds' ),
			'description' 	=> 'Text to be displayed with Centre Image',
			'settings'  	=> 'worlds_title_centre',
			'type'      	=> 'text',
		)
	);	
	$wp_customize->add_setting( 'worlds_url_centre',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'worlds_url_centre',
		array(
			'section'   => 'worlds_section',
			'label'     => esc_html__( 'Centre World URL', 'worlds' ),
			'settings'  => 'worlds_url_centre',
			'type'      => 'url',
		)
	);

	// Worlds Right Image
	$wp_customize->add_setting('worlds_image_right', array(
        'sanitize_callback' => 'esc_url_raw',
        )
    );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'worlds_image_right', 
		array(
			'section' 		=> 'worlds_section',
			'label' 		=> esc_html__( 'Right World Image', 'worlds' ),
			'description' 	=> 'Uploaded image will be used as right image',
			'settings' 		=> 'worlds_image_right'
        )
	));
	$wp_customize->add_setting( 'worlds_title_right',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'worlds_title_right',
		array(
			'section'   	=> 'worlds_section',
			'label'     	=> esc_html__( 'Right Image Title', 'worlds' ),
			'description' 	=> 'Text to be displayed with Right Image',
			'settings'  	=> 'worlds_title_right',
			'type'      	=> 'text',
		)
	);	
	$wp_customize->add_setting( 'worlds_url_right',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'worlds_url_right',
		array(
			'section'   => 'worlds_section',
			'label'     => esc_html__( 'Right World URL', 'worlds' ),
			'settings'  => 'worlds_url_right',
			'type'      => 'url',
		)
	);

	/**
	 * Add Social Media Section
	 */
	$wp_customize->add_section( 'worlds_social_channels',
		array(
			'title'     => esc_html__( 'Social Media', 'worlds' ),
			'panel'     => 'worlds_customizer'
		)
	);

	//email
	$wp_customize->add_setting( 'email',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'email',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Email', 'worlds' ),
			'settings'  => 'email',
			'type'      => 'text',
		)
	);

	/**
	 * Add controls for Social Channels settings
	 */

	//facebook
	$wp_customize->add_setting( 'facebook',
		array(
			'sanitize_callback' => 'worlds_sanitize_text',
		)
	);
	$wp_customize->add_control( 'facebook',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Facebook URL', 'worlds' ),
			'settings'  => 'facebook',
			'type'      => 'url',
		)
	);

	//twitter
	$wp_customize->add_setting( 'twitter',
		array(
			'sanitize_callback' => 'worlds_sanitize_text',
		)
	);
	$wp_customize->add_control( 'twitter',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Twitter URL', 'worlds' ),
			'settings'  => 'twitter',
			'type'      => 'url',
		)
	);

	// Instagram
	$wp_customize->add_setting( 'instagram',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'instagram',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Instagram URL', 'worlds' ),
			'settings'  => 'instagram',
			'type'      => 'url',
		)
	);

	// Pinterest
	$wp_customize->add_setting( 'pinterest',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'pinterest',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Pinterest URL', 'worlds' ),
			'settings'  => 'pinterest',
			'type'      => 'url',
		)
	);

	// Bloglovin
	$wp_customize->add_setting( 'bloglovin',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'bloglovin',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Bloglovin URL', 'worlds' ),
			'settings'  => 'bloglovin',
			'type'      => 'url',
		)
	);

	// google-plus
	$wp_customize->add_setting( 'googleplus',
		array(
			'sanitize_callback' => 'worlds_sanitize_text',
		)
	);
	$wp_customize->add_control( 'googleplus',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Google Plus URL', 'worlds' ),
			'settings'  => 'googleplus',
			'type'      => 'url',
		)
	);

	// Tumblr
	$wp_customize->add_setting( 'tumblr',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'tumblr',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Tumblr URL', 'worlds' ),
			'settings'  => 'tumblr',
			'type'      => 'url',
		)
	);

	// YouTube
	$wp_customize->add_setting( 'youtube',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'youtube',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'YouTube URL', 'worlds' ),
			'settings'  => 'youtube',
			'type'      => 'url',
		)
	);
	// Dribbble
	$wp_customize->add_setting( 'dribbble',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'dribbble',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Dribbble URL', 'worlds' ),
			'settings'  => 'dribbble',
			'type'      => 'url',
		)
	);

	// Sound Cloud
	$wp_customize->add_setting( 'soundcloud',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'soundcloud',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Sound Cloud URL', 'worlds' ),
			'settings'  => 'soundcloud',
			'type'      => 'url',
		)
	);

	// Vimeo
	$wp_customize->add_setting( 'vimeo',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'vimeo',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Vimeo URL', 'worlds' ),
			'settings'  => 'vimeo',
			'type'      => 'url',
		)
	);

	// linkedin
	$wp_customize->add_setting( 'linkedin',
		array(
			'sanitize_callback' => 'worlds_sanitize_text',
		)
	);
	$wp_customize->add_control( 'linkedin',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Linkedin URL', 'worlds' ),
			'settings'  => 'linkedin',
			'type'      => 'url',
		)
	);

	//rss
	$wp_customize->add_setting( 'rss',
		array(
			'sanitize_callback' => 'worlds_sanitize_text',
		)
	);
	$wp_customize->add_control( 'rss',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'RSS URL', 'worlds' ),
			'settings'  => 'rss',
			'type'      => 'url',
		)
	);

	//Snapchat
	$wp_customize->add_setting( 'snapchat',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'snapchat',
		array(
			'section'   => 'worlds_social_channels',
			'label'     => esc_html__( 'Snapchat URL', 'worlds' ),
			'settings'  => 'snapchat',
			'type'      => 'url',
		)
	);

	//tripadvisor
	$wp_customize->add_setting( 'tripadvisor',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'tripadvisor',
	array(
		'section'   => 'worlds_social_channels',
		'label'     => esc_html__( 'Tripadvisor URL', 'worlds' ),
		'settings'  => 'tripadvisor',
		'type'      => 'url',
	)
	);

	//Houzz
	$wp_customize->add_setting( 'houzz',
	array(
		'sanitize_callback' => 'worlds_sanitize_text',
	)
	);
	$wp_customize->add_control( 'houzz',
	array(
		'section'   => 'worlds_social_channels',
		'label'     => esc_html__( 'Houzz URL', 'worlds' ),
		'settings'  => 'houzz',
		'type'      => 'url',
	)
	);
}

add_action( 'customize_register', 'worlds_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function worlds_customize_preview_js() {
	wp_enqueue_script( 'worlds_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '2017', true );
}
add_action( 'customize_preview_init', 'worlds_customize_preview_js' );
