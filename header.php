<?php if(session_id() == '') {session_start();} ?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]>				<html lang="en" class="ie6 ltie9"> <![endif]-->
<!--[if IE 7 ]>					<html lang="en" class="ie7 ltie9"> <![endif]-->
<!--[if IE 8 ]>					<html lang="en" class="ie8 ltie9"> <![endif]-->
<!--[if IE 9 ]>					<html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->	<html lang="en"> <!--<![endif]-->
<?php
$is_mobile = dsk_wp_is_mobile();
?>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta id="theViewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
/*  < modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/
!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
/*  </ modernizr 3.6.0 (Custom Build) | MIT *
/* https://modernizr.com/download/?-webp-setclasses !*/
	</script>
	<script>
	!function(){function t(t){function n(){var n;n=90===window.orientation||-90===window.orientation?t[0]:t[1],theViewport.setAttribute("content","width="+n)}theViewport=document.getElementById("theViewport"),n(),window.addEventListener("orientationchange",n)}void 0!==window.orientation&&1024===screen.height&&t([1100,1100])}();</script>
	<?php /* mod last digits on the script above to landscape, portrait min-width values */ ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<?php $css_url = get_stylesheet_directory_uri() . '/' . DSKdotMinCheck('style.min.css') . '?t=' . time(); ?>
	<link rel="preload" as="style" type="text/css" href="<?php echo $css_url ?>" media="all" >
	<link rel="stylesheet" type="text/css" href="<?php echo $css_url ?>" media="all">

	<link rel="preload" as="script" href="<?php echo get_stylesheet_directory_uri(); ?>/js/<?php echo DSKdotMinCheck('script.min.js'); ?>?t=20191001">
	<!--[if lte IE 8]>
	<script src="https://d78c52a599aaa8c95ebc-9d8e71b4cb418bfe1b178f82d9996947.ssl.cf1.rackcdn.com/html5shiv/html5shiv.3.7.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
	<?php wp_head(); ?>
</head>
<body <?php body_class('mob_menu'); ?>>
<div id="wrapper">
<a id="closeMenu" class="menuToggle" href="#">Close Menu</a>
<div id="menuWall" class="menuToggle"></div>
<div id="mmiWrapper"><ul id="mobMenuItems">
	<li id="mm1" class="menuToggle mmi"><a href="#">Menu</a></li>
	<li id="mm2" class="mmi"><a href="tel:+14075746155">Call</a></li>
	<li id="mm3" class="mmi"><a href="/contact-us/" rel="nofollow">Email</a></li>
	<li id="mm4" class="mmi"><a href="https://goo.gl/maps/gPLiRwK8a6x" target="_blank" rel="nofollow">Visit</a></li>
	<li id="mm5" class="mmi"><a class="menuToggle" href="#">Search</a></li>
</ul></div>
<div id="persistentHeader">
<div id="mhWrapper">
	<header id="mainHeader">
		<a id="logo-main" class="animated fadeInLeft" <?php if ( $is_mobile ) { ?>href="/"<?php } ?>><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/main.png" alt="Orlando Family Lawyer" /></a>
		<div class="mhRight animated fadeInRight">
			<span class="mhCTA">Schedule a Confidential Consultation Today!</span>
			<span class="mhCTA2"><span>Big Family Issues?</span> Call Smallwood, P.A.</span>
			<a class="mhPhone" href="tel:+14075746155">407-574-6155</a>
		</div>
	</header>
</div>
<nav id="mainMenu" class="mm_mob">
	<div id="mblSearchCont">
		<form id="mblSearch" method="get" action="/">
			<input type="text" id="mblsInput" name="s" value="Enter Search Terms Here" />
			<input type="submit" id="mblsSubmit" value="Submit" />
		</form>
	</div>
	<ul>
	<?php wp_nav_menu(array('theme_location' => 'main-nav', 'container' => false, 'items_wrap' => '%3$s')); ?>
	</ul>
</nav>
</div><!-- persistentHeader -->
<?php if(is_front_page()) { ?>
	<div id="homeslides">
		<div id="homeslide1" class="homeslide">
			<div id="homeslideImg1" class="homeslideImg"></div>
			<div class="slideContent">
				<div class="slideBox">
					<span class="slideHead1">Trusted Orlando</span>
					<span class="slideHead2">Family <br>Law Firm</span>
					<p class="slideBody">We keep our clients' best interests <br>in mind at all times.</p>
				</div>
			</div>
		</div>
		<div id="homeslide2" class="homeslide">
			<div id="homeslideImg2" class="homeslideImg"></div>
			<div class="slideContent">
				<div class="slideBox">
					<span class="slideHead1">Our Clients Are</span>
					<span class="slideHead2">Treated <br>Like Family</span>
					<p class="slideBody">Our firm takes an honest and understandable <br>approach to our legal fees. </p>
				</div>
			</div>
		</div>
		<div id="homeslide3" class="homeslide">
			<div id="homeslideImg3" class="homeslideImg"></div>
			<div class="slideContent">
				<div class="slideBox">
					<span class="slideHead1">Contact Us to</span>
					<span class="slideHead2">Schedule A Consultation</span>
					<p class="slideBody">Regardless of your case, we will do our very <br>best to craft a strategic approach.</p>
				</div>
			</div>
		</div>
	</div>
<?php } else if ( is_page_template() ) { ?>
	<div id="homeslides">
		<div id="homeslide1" class="homeslide">
			<div id="homeslideImg1" class="homeslideImg"></div>
			<div class="slideContent">
				<div class="slideBox">
					<span class="slideHead1">Trusted Orlando</span>
					<span class="slideHead2">Divorce <br>Law Firm</span>
					<p class="slideBody">We keep our clients' best interests <br>in mind at all times.</p>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
<div id="subslide<?=rand(1, 16)?>" class="subslide"></div>
<?php } ?>
<div id="caWrapper">
<div id="contentArea">
	<article id="mainContent" class="article">
		<?php web_crumbs("crumbs", ">", "Orlando Family Lawyer", '<span class="current">', '</span>'); ?>
