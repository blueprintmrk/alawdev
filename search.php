<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		<?php } ?>
		<!-- SEARCH RESULTS POSTS START -->

		<h1>Search Results for: <?php the_search_query(); ?></h1>
			<?php while ( have_posts() ) : the_post() ?>
				<?php nc_generate_post_summary(); ?>
			<?php endwhile; ?>


		<!-- BOTTOM NAV (next page/previous page list of results -->

	<?php nextclient_pagination(); ?>

		<!-- IF NO SEARCH RESULTS FOUND... --->

		<?php else : ?>
			<h1>Nothing Found</h1>
			<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
			<style>
			.defaultSearchForm {margin: 0 0 20px;}
			</style>
			<form role="search" method="get" class="defaultSearchForm" action="<?php echo home_url( '/' ); ?>" >
				<div>
				<input type="text" value="" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form>
			<?php if(has_nav_menu('main-nav')) {
				echo "<h2>Site Map</h2>";
				wp_nav_menu(array('theme_location' => 'main-nav', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>'));
			} ?>

		<?php endif; ?>
<!-- END search.php -->
<?php get_footer(); ?>