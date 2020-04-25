<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script>
/*  < modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/
!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
/*  </ modernizr 3.6.0 (Custom Build) | MIT *
/* https://modernizr.com/download/?-webp-setclasses !*/
	</script>
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

	<?php $css_url = get_stylesheet_directory_uri() . '/mobile/' . DSKdotMinCheck('style.css') . '?t=' . time(); ?>
	<link rel="preload" as="style" type="text/css" href="<?php echo $css_url ?>" media="all" >
	<link rel="stylesheet" type="text/css" href="<?php echo $css_url ?>" media="all">
	<link rel="preload" as="script" href="<?php echo get_stylesheet_directory_uri(); ?>/mobile/js/<?php echo DSKdotMinCheck('script.js'); ?>?t=<?php echo time(); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
	<a id="closeMenu" class="menuToggle">Close Menu</a>
	<div id="menuWall" class="menuToggle"></div>
	<div id="mmiWrapper"><ul id="mobMenuItems">
		<li class="mmi mmi_1"><a data-vimeo="312783929">Introduction<br>Video</a></li>
		<li class="mmi mmi_2"><a href="/contact-us/">Contact</a></li>
		<li class="mmi mmi_3"><a href="/blog/">Blog</a></li>
		<li class="menuToggle mmi mmi_4"><a>More</a></li>
	</ul></div>

	<nav id="mainMenu" class="<?php echo mobOrDsktpInitialClass('mm_mob', 'mm'); ?>">
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

	<div class='mobile_phone_number'>
		<span>Schedule a Confidential Consultation Today!</span>
		<a href="tel:+14075746155">407-574-6155</a>
	</div>

	<div class='mobile_logo_main'>
			<picture>
				<source srcset="
					<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/mobile-logo.webp 1x,
					<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/mobile-logo-2x.webp 2x
				" type="image/webp">
				<source srcset="
					<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/mobile-logo.png 1x,
					<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/mobile-logo-2x.png 2x
				" type="image/png">
				<img srcset="
					<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/mobile-logo.png 1x,
					<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/mobile-logo-2x.png 2x
				" alt="Sean Smallwood, P.A.">
			</picture>
	</div>

	<div class='sxn_marketing'>
		<div class='homeslides'>

			<div class='homeslide homeslide_1'>
				<div class='homeslide_img'></div>
				<div class='cont_slide'><div class='cont_box'>
					<span class='cont_hdg cont_hdg_1'>Trusted Orlando</span>
					<span class='cont_hdg cont_hdg_2'>Family<br>Law Firm</span>
					<p>We keep our clients best interests<br>in mind at all times.</p>
				</div></div>
			</div><!--	</ homeslide_1 >	-->

			<div class='homeslide homeslide_2'>
				<div class='homeslide_img'></div>
				<div class='cont_slide'><div class='cont_box'>
					<span class='cont_hdg cont_hdg_1'>Our Clients Are</span>
					<span class='cont_hdg cont_hdg_2'>Treated<br>Like Family</span>
					<p>Our firm takes an honest understandable<br>approach to our legal fees.</p>
				</div></div>
			</div><!--	</ homeslide_2 >	-->

			<div class='homeslide homeslide_3'>
				<div class='homeslide_img'></div>
				<div class='cont_slide'><div class='cont_box'>
					<span class='cont_hdg cont_hdg_1'>Contact Us to</span>
					<span class='cont_hdg cont_hdg_2'>Schedule A<br>Consultation </span>
					<p>Regardless of your case, we will do our<br>very best to craft a strategic approach.</p>
				</div></div>
			</div><!--	</ homeslide_3 >	-->

		</div><!--	</ homeslides >	-->

		<div class='mobile_content'>

			<ul class='mobile_link_list'>
				<li class='item_1'><a href="/attorney-profile/"><span>Attorney<br>Profile</span></a></li>
				<li class='item_2'><a href="/orlando-divorce-lawyer/faqs/"><span>Family<br>Law</span></a></li>
				<li class='item_3'><a href="/orlando-divorce-lawyer/"><span>Divorce</span></a></li>
				<li class='item_4'><a href="/testimonials/"><span>Testimonials</span></a></li>
			</ul>
		</div><!--  </ mobile_content >  -->

	</div><!--	</ sxn_marketing >	-->

<div id='contentArea'><div class='sxn_wrap'>
	<article id='mainContent' class='article'>

		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				}
			}
		?>

	</article>
</div></div><!--  </ sxn_wrap ></ contentArea >  -->

<div class='sxn_practice_areas'><div class='sxn_wrap'>
	<h3>Divorce</h3>

	<ul>
		<li><a href="/orlando-divorce-lawyer/">Contested Divorce</a></li>
		<li><a href="/orlando-high-asset-divorce-lawyer/">Divorce Modification</a></li>
		<li><a href="/orlando-divorce-lawyer/mens-divorce/">Divorce Rights</a></li>
		<li><a href="/orlando-uncontested-divorce-lawyer/">Uncontested Divorce</a></li>
	</ul>
	<h3>Family Law</h3>

	<ul>
		<li><a href="/orlando-child-custody-lawyer/">Child Custody</a></li>
		<li><a href="/orlando-child-support-lawyer/">Child Support</a></li>
		<li><a href="/orlando-grandparents-rights-lawyer/">Grandparents' Rights</a></li>
		<li><a href="/orlando-paternity-lawyer/">Paternity</a></li>
		<li><a href="/orlando-prenuptial-agreements-lawyer/">Prenuptial Agreement</a></li>
		<li><a href="/orlando-property-division-lawyer/">Property Distribution</a></li>
		<li><a href="/orlando-alimony-lawyer/">Spousal Support</a></li>
		<li><a href="/orlando-fathers-rights-lawyer/">Visitation Rights</a></li>
	</ul>
</div></div>

<div class='sxn_badges'><div class='sxn_wrap'>

	<div class='element_slide rotating_slide'>
		<div class='slide_cont slide_cont_1'>
			<span>
					<img class='lazy item_1' data-src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/badges/10_best_2018.png" alt="10 Best">
					<img class='lazy item_2' data-src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/badges/avvo_kite.png" alt="AVVO">
					<img class='lazy item_3' data-src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/badges/bbb.png" alt="BBB">
				</picture>
			</span>
		</div>
		<div class='slide_cont slide_cont_2'>
			<span>
					<img class='lazy item_4' data-src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/badges/legal_elite.png" alt="Legal Elite">
					<img class='lazy item_5' data-src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/badges/super.png" alt="Super Lawyers">
					<img class='lazy item_6' data-src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/badges/tfb.png" alt="TFB">
				</picture>
			</span>
		</div>
	</div>

</div></div><!--  </ sxn_wrap ></ sxn_badges >  -->

<div class="sb_testimonials">
	<ul class="rotating_slides">
		<li class='slide_cont'>
			<div class="testWrap">
				<p class="testBody">“I initially used Sean for my divorce and needed him to follow up on an ongoing issue that my Ex did not follow thru with. After his quick response and a letter to her, the matter was resolved quickly. I would not hesitate to use him again if needed, also would highly recommend him to anyone that needed his services. Thanks Sean for everything”</p>
				<span class="testName">— Karl</span>
			</div>
		</li>
		<li class='slide_cont'>
			<div class="testWrap">
				<p class="testBody">“I hired Mr. Smallwood for my child support/custody. Mr. Smallwood is an Extremely professional attorney, He does what he says he is going to do. If you ask him to do something he will guide you in the direction that best suits your needs, and will always do what you want him to do. He is very affordable and easy to talk to. I would definetly recommend him.”</p>
				<span class="testName">— Daniel</span>
			</div>
		</li>
		<li class='slide_cont'>
			<div class="testWrap">
				<p class="testBody">“Sean Smallwood and his staff were wonderfully kind, attentive, courteous and effective. They made me feel like they took my case very seriously at all times. They always returned phone calls and worked with me to be sure that I was completely comfortable every step of the way. I would recommend Sean Smallwood and his staff without hesitation.”</p>
				<span class="testName">— Elizabeth St. Hilaire</span>
			</div>
		</li>
		<li class='slide_cont'>
			<div class="testWrap">
				<p class="testBody">“Mr. Sean Small wood & his team are amazing people. It was my first time going through a child support case not knowing anything. Mr. Sean took his time to educated me on my rights as a father & advise me on the Necessary steps to take. They worked around my budget financially, time management & were very quick on responding back to all my questions. 5-stars all the way”</p>
				<span class="testName">— Rafael Hernandez</span>
			</div>
		</li>
		<li class='slide_cont'>
			<div class="testWrap">
				<p class="testBody">“From the moment I met Sean Smallwood I knew he was the attorney for me. I interviewed several attorneys (some much more costly than Sean) but I had a comfort level with Sean that I did not have with the others. The "others" made me feel like "just another child support case" and with Sean I feel he truly cares.”</p>
				<span class="testName">— Amy</span>
			</div>
		</li>
		<li class='slide_cont'>
			<div class="testWrap">
				<p class="testBody">“ Sean and his team were a blessing , if it wasn't for them I wouldn't have been able to be a part of my children's lives , I will forever be grateful for them. I went from being able to only see them a few hours a week to 50/50 custody. Thank you so much.”</p>
				<span class="testName">— Kurt E</span>
			</div>
		</li>
	</ul>
	<ul class="testNav">
		<li class="testPrev">
		<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/arrow-testimonials.png" alt="Previous"></a>
		</li><li class="testNext">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/mobile/img/arrow-testimonials.png" alt="Next"></a>
		</li>
	</ul>
</div> <!-- end sb_testimonials -->

<div class='sxn_agency'><div class='sxn_wrap'>
	&copy; <?php copyrightYears(2019); ?> Sean Smallwood, P.A., Attorney at Law. All rights reserved. This law firm website and <a target="_blank" href="https://www.milemarkmedia.com/">legal marketing</a> are managed by MileMark Media.
</div></div>

</div><!--  </ wrapper >  -->

<?php wp_footer(); ?>

<script><?php include(get_stylesheet_directory() . '/js/head.min.js') ?></script>
<script>head.js({ jQuery: "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" });
head.ready("jQuery", function() {head.load("https://d78c52a599aaa8c95ebc-9d8e71b4cb418bfe1b178f82d9996947.ssl.cf1.rackcdn.com/dsk_slides/dsk_slides.1.0.2.min.js", function() {head.load("<?php echo get_stylesheet_directory_uri(); ?>/mobile/js/<?php echo DSKdotMinCheck('script.js'); ?>?t=<?php echo time(); ?>")}); });</script>

</body></html>