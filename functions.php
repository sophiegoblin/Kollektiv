<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );



function femur_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'femur_excerpt_length', 999); // Wordpress, when you're setting the excerpt length, override with my length function. And do it last!



function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu'  =>  __( 'Primary Menu' , 'kollektiv-legacy-theme' ) // I can add more menus in the array here (example - footer menu)
		)
	);
}
add_action( 'init', 'register_theme_menus' );



function femur_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}
femur_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
femur_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );



function femur_theme_styles() {

	//wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/app.css');

}
//Wordpress, when it is time to enqueue scripts add the stylesheets
add_action( 'wp_enqueue_scripts', 'femur_theme_styles' );



function femur_theme_js() {

	wp_enqueue_script( 'modernizer_js', get_template_directory_uri() . '/assets/bower_components/modernizr/modernizr.js',
		'', '', false ); // False = Place in header
	wp_enqueue_script( 'vendor_js', get_template_directory_uri() . '/assets/js/vendor/vendor.min.js', 
		array('jquery'), '', true ); // Dependant on jquery. True = Place in footer
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/app.js', 
		array('jquery'), '', true ); // Dependant on jquery and foundation

}
//Wordpress, when it is time to enqueue scripts add the javascript files
add_action( 'wp_enqueue_scripts', 'femur_theme_js' );

?>