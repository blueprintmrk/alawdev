<?php

// START Register Navigations
register_nav_menus (
	array (
		'main-nav' => 'Main',
		'footer-nav' => 'Footer'
	)
);
// END Register Navigations

//Uncomment line below and set it to desired tag line for the main blog page:
//$nc_blog_home_tagline = 'Recent Blog Posts';

//Uncomment line below to allow automatic feeds - when client requests them
//add_theme_support( 'automatic-feed-links' );

add_filter ('jetpack_implode_frontend_css', '__return_false');
add_filter( 'jetpack_enable_open_graph', '__return_false' );

function dskyoutubefunc($atts) {
	$id = $atts['id'];
	return <<<EOT
		<div class="youtube-embed-cont">
			<iframe src="https://www.youtube.com/embed/{$id}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
EOT;
}
add_shortcode('youtube', 'dskyoutubefunc');

function output_nc_sitemap($content) {
	if(!is_page(array('sitemap','site-map'))) {return $content;}
	$siteMapPageID = get_the_ID();
	$pagesToExclude = "{$siteMapPageID},18,36,";
	$thankYouPage = get_page_by_path('thank-you', OBJECT, 'page');
	if(isset($thankYouPage->ID)) {
		$pagesToExclude .= $thankYouPage->ID . ",";
	}
	//To add more pages, separate them with a comma
	$pagesToExclude .= "";
	$args = "echo=0&exclude={$pagesToExclude}&title_li=";
	$content .= "<h1>Site Map</h1><ul>" . wp_list_pages($args) . "</ul>";
	return $content;
}

remove_action('wp_head', 'wp_generator');
add_action( 'after_setup_theme', 'theme_slug_setup' );
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}

add_filter('document_title_separator', 'dsk_change_separator');
function dsk_change_separator() {
    return '|';
}

register_nav_menus (
	array (
		'main-nav' => 'Main'
	)
);

add_filter( 'the_content', 'output_nc_sitemap' );
if(!function_exists('output_nc_sitemap')) {
	function output_nc_sitemap($content) {
		if(!is_page(array('sitemap','site-map'))) {return $content;}
		$siteMapPageID = get_the_ID();
		$pagesToExclude = "{$siteMapPageID},";
		$thankYouPage = get_page_by_path('thank-you', OBJECT, 'page');
		if(isset($thankYouPage->ID)) {
			$pagesToExclude .= $thankYouPage->ID . ",";
		}
		//To add more pages, separate them with a comma
		$pagesToExclude .= "";
		$args = "echo=0&exclude={$pagesToExclude}&title_li=";
		$content .= "<h1>Site Map</h1><ul>" . wp_list_pages($args) . "</ul>";
		return $content;
	}
}

add_shortcode('child_pages', 'child_pages_shortcode');
if(!function_exists('child_pages_shortcode')) {
	function child_pages_shortcode($atts) {
		global $post;
		extract( shortcode_atts( array('id' => $post->ID), $atts ) );
	  	$children = wp_list_pages('title_li=&child_of='.$id.'&echo=0');
	  	if ($children) {
	  		$children = "<ul>" . $children . "</ul>";
	  		return $children;
	  	}
	}
}

add_filter('excerpt_more', 'new_excerpt_more');
if(!function_exists('new_excerpt_more')) {
	function new_excerpt_more($more) {
		global $post;
		return '...  <a href="'. get_permalink($post->ID) . '">Read More &raquo;</a>';
	}
}

add_filter('excerpt_length', 'my_excerpt_length');
if(!function_exists('my_excerpt_length')) {
	function my_excerpt_length($length) {
		return 54;
	}
}

if(!function_exists('nextclient_pagination')) {
	function nextclient_pagination() {
		global $wp_query;
		if ( $wp_query->max_num_pages > 1 ) : ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts') ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
			</div><!-- #nav-above -->
		<?php endif;
	}
}

if(!function_exists('allow_editor_to_mod_menus')) {
	function allow_editor_to_mod_menus() {
		$role_object = get_role( 'editor' );
		$role_object->add_cap( 'edit_theme_options' );
	}
}
allow_editor_to_mod_menus();

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true );
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'postThumbMult', 150, 150, true );
	add_image_size( 'postThumbSingle', 200, 200, true );
}

add_filter( 'wp_get_attachment_image_attributes','dskAltAndTitleOnImage', 10, 2 );
function dskAltAndTitleOnImage( $attr, $attachment = null ) { 
    $imgTitle = trim( $attachment->post_title );
	$imgAlt = trim( $attr['alt'] );
	if($imgAlt === "") {
		$imgAltAndTitle = $imgTitle;
	} else {
		$imgAltAndTitle = $imgAlt;
	}
	$imgAltAndTitle = esc_attr( strip_tags( $imgAltAndTitle ) );
    $attr['title'] = $imgAltAndTitle;
    $attr['alt'] = $imgAltAndTitle;
    return $attr;
}

add_filter('the_content', 'add_sharing_capabilities_nc_content');
if(!function_exists('add_sharing_capabilities_nc_content')) {
	function add_sharing_capabilities_nc_content($content) {
		if( is_single() && has_post_thumbnail() ) {
			$content = get_the_post_thumbnail(null, 'postThumbSingle', array('class' => 'postThumbSingle')) . $content;
		} elseif(is_page() && has_post_thumbnail()) {
			$firstP = stripos($content, "<p");
			if($firstP !== false) {
				$firstPcloses = stripos($content, ">", $firstP);
				if($firstPcloses !== false) {
					$left = substr($content, 0, $firstPcloses + 1);
					$right = substr($content, $firstPcloses + 1);
					$content = $left . get_the_post_thumbnail(null, 'postThumbSingle', array('class' => 'postThumbSingle pageThumbSingle')) . $right;			
				}
			}
			return $content;
		} elseif(is_page()) {
			return $content;
		}		
		$content .= shareThisWrapper();		
		return $content;
	}
}

if(!function_exists('copyrightYears')) {
	function copyrightYears($startYear) {
		$curYear = date("Y");
		if( $curYear > $startYear ) {
			echo $startYear . ' - ' . $curYear;
		} else {
			echo $curYear;
		}
	}
}
if(!function_exists('shareThisWrapper')) {
	function shareThisWrapper($adtlClasses = "") {
		if(is_feed()) {return false;}
		$pLINK = urlencode(get_permalink());
		return <<<EOT
			<div class='shareThisWrapper {$adtlClasses}'>
				<a target='_blank' class='dskSharingIcon dskSharingIcon_facebook' data-url='http://social.nextclient.com/?site=fb&u={$pLINK}'><img alt="Facebook" title="Facebook" src="https://www.affordablefamilylawyer.com/wp-content/uploads/2020/03/ftlg_16.png"></a>
				<a target='_blank' class='dskSharingIcon dskSharingIcon_twitter' data-url='http://social.nextclient.com/?site=tw&u={$pLINK}'><img alt="Twitter" title="Twitter" src="https://www.affordablefamilylawyer.com/wp-content/uploads/2020/03/ftlg_16.png"></a>
				<a target='_blank' class='dskSharingIcon dskSharingIcon_linkedin' data-url='http://social.nextclient.com/?site=li&u={$pLINK}'><img alt="LinkedIn" title="LinkedIn" src="https://www.affordablefamilylawyer.com/wp-content/uploads/2020/03/ftlg_16.png"></a>
			</div>
EOT;
	}
}
if(!function_exists('nc_generate_more_posts_by_author_link')){
	function nc_generate_more_posts_by_author_link() {
		return get_the_author();
	}
}
if(!function_exists('nc_generate_post_summary')){
	function nc_generate_post_summary() {
		$id = get_the_ID();
		$postLink = get_permalink();
		$postTitle = get_the_title();
		$getMorePostsByAuthor = nc_generate_more_posts_by_author_link();
		$postTime = get_the_time( get_option( 'date_format' ) );
		$postTitleAndMeta = <<<EOT
			<h2><a href="$postLink" rel="bookmark">$postTitle</a></h2>
			<div class="excerpt_meta">
				<span class="meta-prep meta-prep-author">By </span>
				<span class="author vcard">$getMorePostsByAuthor</span>
				<span class="meta-sep"> | </span>
				<span class="meta-prep meta-prep-entry-date">Posted on </span>
				<span class="entry-date"><abbr class="published">$postTime</abbr></span>
			</div>
EOT;
		$postExcerpt = apply_filters('the_excerpt', get_the_excerpt());
		$postExcerpt .= shareThisWrapper();
		if ( has_post_thumbnail() ) {
			$thumbnail = get_the_post_thumbnail($id, 'postThumbMult', array('class' => 'postThumbMult'));
			$postExcerptWrapper = <<<EOT
			<div class="post_entry_mult_left">
				$thumbnail
			</div>
			<div class="post_entry_mult_right">
				$postTitleAndMeta
				$postExcerpt
			</div>
EOT;
		} else {
			$postExcerptWrapper = <<<EOT
			$postTitleAndMeta
			$postExcerpt
EOT;
		}
		$preppedExcerpt = <<<EOT
		<div class="post_entry_mult">
			$postExcerptWrapper
		</div><!-- post-entry -->
EOT;
		echo $preppedExcerpt;
	}
}

/* Exclude iPad from wp_is_mobile() */
if(!function_exists('dsk_wp_is_mobile')) {
	function dsk_wp_is_mobile() {
		static $is_mobile;

		if ( isset($is_mobile) )
			return $is_mobile;

		if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
			$is_mobile = false;
		} elseif (
			strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
				$is_mobile = true;
		} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
				$is_mobile = true;
		} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
			$is_mobile = false;
		} else {
			$is_mobile = false;
		}
		return $is_mobile;
	}
}

if(!function_exists('web_crumbs')) {
	function web_crumbs($id = "crumbs", $delimiter = ">", $home = "Home", $before = '<span class="current">', $after = '</span>') {

		if ( !is_home() && !is_front_page() && is_page()) {

			echo "<div id='{$id}'>";

			global $post;
			$homeLink = get_bloginfo('url');
			echo "<a class='breadcrumb_home' href='{$homeLink}'>{$home}</a> {$delimiter} ";

			if ( is_page() && !$post->post_parent ) {
				echo $before . get_the_title() . $after;
			} elseif ( is_page() && $post->post_parent ) {

				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
					$parent_id  = $page->post_parent;

				}

				$breadcrumbs = array_reverse($breadcrumbs);
				foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;

			}
			echo '</div>';
		}
	}
}//web_crumbs ends

add_shortcode('headshot', 'defaultHeadshotFunc');
if(!function_exists('defaultHeadshotFunc')) {
	function defaultHeadshotFunc($atts) {
		$atts = shortcode_atts( array(
			'url' => '',
			'description' => 'Headshot',
			'class' => 'headshot'
		), $atts );
		$class = $atts['class'];
		$url = $atts["url"];
		$description = $atts["description"];
		$possibleHeadshotPath = "/wp-content/media/headshots/";
		if( stripos($url, "http") !== 0 && substr($url, 0, 1) !== "/" ) {
			$url = 	$possibleHeadshotPath . "{$url}";
		}
		return "<img class='{$class}' src='{$url}' alt='{$description}' title='{$description}' />";
	}
}

if(!function_exists('mobOrDsktpInitialClass')) {
	function mobOrDsktpInitialClass($mobClass, $dsktpClass) {
		if(dsk_wp_is_mobile()) {return $mobClass;}
		else {return $dsktpClass;}
	}
}

if(!function_exists('DSKdotMinCheck')) {
	function DSKdotMinCheck($filename) {
		$modding = isset($_GET['modding']);
		if($modding) {
			$filename = str_replace(".min.css", ".css", $filename);
			$filename = str_replace(".min.js", ".js", $filename);				
		}
		return $filename;
	}
}

if(!function_exists('dskImgFunc')) {
	add_shortcode('img', 'dskImgFunc');
	function dskImgFunc($atts) {
		if(!isset($atts["title"]) && isset($atts["alt"])) {
			$atts["title"] = $atts["alt"];
		}
		$imgHTML = "<img";	
		foreach($atts as $key=>$val) {
			$imgHTML .= " {$key}=\"{$val}\"";		
		}
		$imgHTML .= ">";
		return $imgHTML;
	}
}