<?php get_header(); ?>
<style>#searchFormOn404 {margin: 0 0 20px;</style>
	<h1>We Are Sorry</h1>
	<p>The page you requested does not exist. You can <a href="javascript:history.back();">return to the previous page</a> or perform a search below.</p>

	<h2>Search</h2>
	<form id="searchFormOn404" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
		<div>
		<input type="text" value="" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Submit" />
		</div>
	</form>

	<?php if(has_nav_menu('main-nav')) {
		echo "<h2>Site Map</h2>";
		wp_nav_menu(array('theme_location' => 'main-nav', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>'));
	} ?>
	
	
<?php get_footer(); ?>