<?php 
define( 'THEME_DIR', get_template_directory() );
define( 'INC_DIR', THEME_DIR. '/inc' );

/*
 *
 * Enqueue theme styles
 * 
 */ 
function enqueue_theme_scripts() {
    $version = wp_get_theme()->get('Version');
    

    wp_register_style( 'bootstrap-styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), $version);
    wp_enqueue_style( 'bootstrap-styles' );  

    //wp_register_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap', array(), $version);
    wp_register_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap', array(), $version);

    wp_enqueue_style( 'google-font' );  
    

        
    
    wp_register_script('boostrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'),$version, true);
    wp_enqueue_script('boostrap-js');

    //AOS
    wp_register_style( 'aos-styles', 'https://unpkg.com/aos@next/dist/aos.css', array(), $version);
    wp_enqueue_style( 'aos-styles' );  
    wp_register_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'),$version, true);
    wp_enqueue_script('aos-js');

    //theme
    wp_register_style( 'theme-styles', get_template_directory_uri() .'/style.css', array(), $version);
    wp_enqueue_style( 'theme-styles' );

    //lozad
		wp_register_script('lozad', get_template_directory_uri() .'/assets/js/lozad.min.js', array('jquery'),$version,true);
		wp_enqueue_script('lozad');

    //theme scripts
    wp_register_script('theme-js', get_template_directory_uri() .'/assets/js/scripts.js', array('jquery'),$version, true);
    wp_enqueue_script('theme-js');

    

} 
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

//theme functions 
require( INC_DIR .'/theme-functions.php' );

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );

remove_action('wp_head', 'wp_generator');

function greggs_menus() {
    register_nav_menu('main',__( 'Main' ));
  }
  add_action( 'init', 'greggs_menus' );

  function testimonials() {
	$testimonials = '<div class="testimonials">';

	$testimonials .= '<div class="content-column one_half"><i class="fas fa-quote-left"></i><p>Gregg was exceptional.  He completed the work timely and to my specifications.  He listened well and took the time to understand my requirements.  I would not hesitate to use him in the future.</p></div>';//<span>John Stack, 3 Big Heads</span>
	$testimonials .=  '<div class="content-column one_half last_column"><i class="fas fa-quote-left"></i><p>Gregg has been once again very fast in both his work and communication. This is the second time we have used him, and we will again!</p></div>';	

		$testimonials .= '</div>';

	return $testimonials;
}
add_shortcode('testimonials', 'testimonials');

function clients() {
	$clients = '<div class="clients">';

	$clients .= '<a href="https://henryusa.com" target="_blank" rel="nofollow"><img class="lozad" data-src="https://mynameisgregg.com/wp-content/uploads/2018/11/henry.jpg" /></a>';

	$clients .= '<a href="http://playtime.pem.org/" target="_blank" rel="nofollow"><img class="lozad" data-src="https://mynameisgregg.com/wp-content/uploads/2018/11/playtime-1.jpg" /></a>';

	$clients .= '<a href="https://projectmepro.com/" target="_blank" rel="nofollow"><img class="lozad" data-src="https://mynameisgregg.com/wp-content/uploads/2018/11/pmp-1.jpg" /></a>';

	$clients .= '<a href="https://www.margebar.com/" target="_blank" rel="nofollow"><img class="lozad" data-src="https://mynameisgregg.com/wp-content/uploads/2018/11/marge-2.jpg" /></a>';

	$clients .= '<a href="https://southshorerealtors.com/" target="_blank" rel="nofollow"><img class="lozad" data-src="https://mynameisgregg.com/wp-content/uploads/2018/11/ssr.jpg" /></a>';
	
	

	

	$clients .= '</div>';

	return $clients;
}
add_shortcode('clients', 'clients');