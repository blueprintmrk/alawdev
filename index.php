<?php get_header(); ?>
	<h1><?php global $nc_blog_home_tagline; if(isset($nc_blog_home_tagline)) echo $nc_blog_home_tagline; else echo 'Recent Blog Posts'; ?></h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php nc_generate_post_summary(); ?>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php nextclient_pagination(); ?>
<?php get_footer(); ?>