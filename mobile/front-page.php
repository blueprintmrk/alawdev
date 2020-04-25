<?php
if( dsk_wp_is_mobile() ) {
	include('mobile/front-page-mobile.php');
} else {
	get_header();
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	endif;
	get_footer();
}
?>