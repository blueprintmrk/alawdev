<?php get_header(); ?>
<!-- BEGIN category.php -->
	<?php the_post(); ?>
	<h1 class="page-title"><?php _e( 'Category Archives:', 'your-theme' ) ?> <span class="category-title"><?php single_cat_title() ?></span></h1>
	<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
	<?php rewind_posts(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php nc_generate_post_summary(); ?>
	<?php endwhile; ?>
	<?php nextclient_pagination(); ?>
<!-- END category.php -->
<?php get_footer(); ?>