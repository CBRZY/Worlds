<?php
/**
 * Carousel for landing page
 *
 * @package WorldsTheme
 * @since Worlds Theme 1.0
 */
 ?>

<!-- This section was inspired by Mario Duarte
https://codepen.io/MarioDesigns/pen/woJgeo -->
<div id="worlds">
	<!-- LEFT WORLD -->
	<div class="world worldLeft">
		<a class="<?php echo (empty(get_theme_mod( 'worlds_url_left' ))?'disabled':'') ?>" href="<?php echo get_theme_mod( 'worlds_url_left' ); ?>">
			<img class="worldImage" src="<?php echo get_theme_mod( 'worlds_image_left' ); ?>" alt="<?php echo get_theme_mod( 'worlds_title_centre' ); ?>" />
			<h1 class="worldTextLeft"><?php echo get_theme_mod( 'worlds_title_left' ); ?></h1>
		</a>
	</div>
	
	<!-- RIGHT WORLD -->
	<div class="world worldRight">
		<a class="<?php echo (empty(get_theme_mod( 'worlds_url_right' ))?'disabled':'') ?>" href="<?php echo get_theme_mod( 'worlds_url_right' ); ?>">
			<img class="worldImage" src="<?php echo get_theme_mod( 'worlds_image_right' ); ?>" alt="<?php echo get_theme_mod( 'worlds_title_right' ); ?>" />
			<h1 class="worldTextRight"><?php echo get_theme_mod( 'worlds_title_right' ); ?></h1>
		</a>
	</div>

	<!-- CENTRE WORLD -->
	<div class="world worldCenter">
		<a class="<?php echo (empty(get_theme_mod( 'worlds_url_centre' ))?'disabled':'') ?>" href="<?php echo get_theme_mod( 'worlds_url_centre' ); ?>">
			<img class="worldImage" src="<?php echo get_theme_mod( 'worlds_image_centre' ); ?>" alt="<?php echo get_theme_mod( 'worlds_title_centre' ); ?>" />
			<h1 class="worldTextCentre"><?php echo get_theme_mod( 'worlds_title_centre' ); ?></h1>
		</a>
	</div>
</div>
