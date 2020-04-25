<?php get_header(); ?>
			<!-- BEGIN archive.php -->
				<?php the_post(); ?>
					<?php if ( is_day() ) : ?>
					<h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'your-theme' ), get_the_time(get_option('date_format')) ) ?></h1>
					<?php elseif ( is_month() ) : ?>
					<h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'your-theme' ), get_the_time('F Y') ) ?></h1>
					<?php elseif ( is_year() ) : ?>
					<h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'your-theme' ), get_the_time('Y') ) ?></h1>
					<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
					<h1 class="page-title"><?php _e( 'Blog Archives', 'your-theme' ) ?></h1>
				<?php endif; ?>
				<?php rewind_posts(); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php nc_generate_post_summary(); ?>
				<?php endwhile; ?>
				<?php nextclient_pagination(); ?>
			<!-- END archive.php -->
<?php get_footer(); ?>