<?php 

/**
* My functions
*/

/**
*function to return category links
*/

function my_cat_link($cat_id) {

	// Get the URL of this category
    $category_link = get_category_link( $cat_id );
    echo esc_url( $category_link );
}

/**
*Ajax functions for showing info to the user
*/


function cat_filter() {
    
	
	if ($_POST['categ'] == "Tudo" || !isset($_POST['categ'])) {
		$cat = "";
	} else {
		$cat = $_POST['categ'];
	}
	
	//if ($cat ==="Outros") // preencher

	$the_query = new WP_Query("category_name=$cat&posts_per_page=6");
	 if ( $the_query -> have_posts()) : 
         
         while ($the_query -> have_posts()) :
         	$the_query -> the_post(); 
             // Blog post -->
                 echo "<li class=\"span4\">";
                
                     // Blog image -->
                     echo "<a href=\"",the_permalink(),"\"";
                  	 echo "<div style=''>",the_post_thumbnail('front-page-size'),"</div>";
                     echo "</a>";
                    
                     // Blog title -->
                     echo "<h5>",the_title(),"<br/>";
                     echo "<small>",the_time('j \d\e F \d\e Y'),"</small>";
                     echo "</h5>";
                    
                     //<!-- Blog post description -->
                     echo "<p class=\"smallFontBy08\">";
                     echo substr(strip_tags(get_the_content()),0,250),"...";
                     echo "</p>";
                    
                     //<!-- Blog read more -->
                     echo "<div class=\"read-more\">";
                     echo "<a href=\"",the_permalink(),"\">Leia Mais...</a>";
                     echo "</div>";

                 echo "</li>";
         endwhile;
      else: 
             echo "<li class=\"span4\">";_e('Desculpe, não há posts.'); echo "</li>";
      endif; 
   	die();
}

add_action( 'wp_ajax_nopriv_cat_action', 'cat_filter' );
add_action( 'wp_ajax_cat_action', 'cat_filter' );

/**
*New thumbnail size for front page
*/


add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 300, 300 );
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'front-page-size', 390, 300); //390 x 300 pixels (soft cropped)
	
}



function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	
	wp_register_script( 'theme', get_template_directory_uri() . '/bootstrap/js/theme.js', array( 'jquery' ) );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'theme' );
	wp_enqueue_script( 'bootstrap' );
		
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	add_filter('the_content','wpi_image_content_filter',11);

	function wpi_image_content_filter($content)
	{

		if (is_home() || is_front_page()){
		  $content = preg_replace("/<img[^>]+\>/i", "", $content);
    	}

		return $content;
	}
	
	function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

?>