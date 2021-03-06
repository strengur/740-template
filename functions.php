<?php
/***** Register our sidebars and widgetized areas *****/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/***** STYLES AND FONTS DECLARED *****/
function theme_styles() {
	wp_enqueue_style('googleFonts-Josefin-Slab','https://fonts.googleapis.com/css?family=Josefin+Slab:400,700');

	wp_enqueue_style('googleFonts-Alegreya-Sans','https://fonts.googleapis.com/css?family=Alegreya+Sans:300,500,300italic,500italic');

	wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
	wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function wpb_adding_scripts() {
	wp_enqueue_script( 'custom-app-script', get_template_directory_uri() . '/js/main-java.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('custom-app-script');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

/***** EXCERPT FOR LEFT AND RIGT COLUMNS ON FRONTPAGE *****/
function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}


?>
