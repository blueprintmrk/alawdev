<?php get_header(); ?>
<!-- BEGIN author.php -->
	<?php the_post(); ?>
	<?php
		if(isset($nc_author_name)) {$authordata->display_name = $nc_author_name;}
	?>
	<h1 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'your-theme' ), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>" ) ?></h1>
	<?php $authordesc = $authordata->user_description; if ( !empty($authordesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $authordesc . '</div>' ); ?>
	<?php rewind_posts(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php nc_generate_post_summary(); ?>
	<?php endwhile; ?>
<?php nextclient_pagination(); ?>
<!-- END author.php -->
<?php get_footer(); ?>