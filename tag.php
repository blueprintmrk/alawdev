<?php get_header(); ?>
<!-- BEGIN tag.php -->
	<?php the_post(); ?>
	<h1 class="page-title"><?php _e( 'Tag Archives:', 'your-theme' ) ?> <span><?php single_tag_title() ?></span></h1>
	<?php rewind_posts(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php nc_generate_post_summary(); ?>
	<?php endwhile; ?>
	<?php nextclient_pagination(); ?>
<!-- END tag.php -->
<?php get_footer(); ?>