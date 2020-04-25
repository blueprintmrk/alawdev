<?php function sbArchives() { ?>
	<section class="blog-sidebar">
		<h2>Archives</h2>
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => '5', 'format' => 'html', 'before' => '', 'after' => '', 'show_post_count' => false, 'echo' => 1 ) ); ?>
		</ul>
		<h2>Categories</h2>
		<ul>
			<?php wp_list_categories( array( 'orderby' => 'name', 'order' => 'ASC', 'show_last_update' => 1, 'style' => 'list', 'show_count' => false, 'hide_empty' => 1, 'hierarchical' => true, 'title_li' => '', 'show_option_none' => 'No categories', 'taxonomy' => 'category' ) );  ?>
		</ul>
	</section>
<?php } ?>
<?php function sbTests() {
	if (is_front_page()) { ?>
<div class="sb-homeTitle">
<span class="homeTitle">Caring and Dependable Orlando Family Lawyer</span>
</div> <!-- end sb-homeTitle -->
<?php } ?>
<div class="sb-testimonials">
	<ul class="testList">
		<li class="test">
			<div class="testWrap">
				<p class="testBody">“I initially used Sean for my divorce and needed him to follow up on an ongoing issue that my Ex did not follow thru with. After his quick response and a letter to her, the matter was resolved quickly. I would not hesitate to use him again if needed, also would highly recommend him to anyone that needed his services. Thanks Sean for everything”</p>
				<span class="testName">— Karl</span>
			</div>
		</li>
		<li class="test">
			<div class="testWrap">
				<p class="testBody">“I hired Mr. Smallwood for my child support/custody. Mr. Smallwood is an Extremely professional attorney, He does what he says he is going to do. If you ask him to do something he will guide you in the direction that best suits your needs, and will always do what you want him to do. He is very affordable and easy to talk to. I would definetly recommend him.”</p>
				<span class="testName">— Daniel</span>
			</div>
		</li>
		<li class="test">
			<div class="testWrap">
				<p class="testBody">“Sean Smallwood and his staff were wonderfully kind, attentive, courteous and effective. They made me feel like they took my case very seriously at all times. They always returned phone calls and worked with me to be sure that I was completely comfortable every step of the way. I would recommend Sean Smallwood and his staff without hesitation.”</p>
				<span class="testName">— Elizabeth St. Hilaire</span>
			</div>
		</li>
		<li class="test">
			<div class="testWrap">
				<p class="testBody">“Mr. Sean Small wood & his team are amazing people. It was my first time going through a child support case not knowing anything. Mr. Sean took his time to educated me on my rights as a father & advise me on the Necessary steps to take. They worked around my budget financially, time management & were very quick on responding back to all my questions. 5-stars all the way”</p>
				<span class="testName">— Rafael Hernandez</span>
			</div>
		</li>
		<li class="test">
			<div class="testWrap">
				<p class="testBody">“From the moment I met Sean Smallwood I knew he was the attorney for me. I interviewed several attorneys (some much more costly than Sean) but I had a comfort level with Sean that I did not have with the others. The "others" made me feel like "just another child support case" and with Sean I feel he truly cares.”</p>
				<span class="testName">— Amy</span>
			</div>
		</li>
		<li class="test">
			<div class="testWrap">
				<p class="testBody">“Sean and his team were a blessing , if it wasn't for them I wouldn't have been able to be a part of my children's lives , I will forever be grateful for them. I went from being able to only see them a few hours a week to 50/50 custody. Thank you so much.”</p>
				<span class="testName">— Kurt E</span>
			</div>
		</li>
	</ul>
	<ul class="testNav">
		<li class="testPrev">
		<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_area/sidebar/tests/arrow-testimonials-1.png" alt="Previous"></a>
		</li><li class="testNext">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_area/sidebar/tests/arrow-testimonials-1.png" alt="Next"></a>
		</li>
	</ul>
</div> <!-- end sb-testimonials -->
<?php } ?>
<?php function sbAreas() { ?>
	<div class="sbPASWrap">
		<div class="sbPASListBox">
			<div class="sbPASListBoxInner">
				<h3 class="paHeading">Divorce</h3>
				<ul class="sbPASList">
					<li><a href="/orlando-divorce-lawyer/">Contested Divorce</a></li>
					<li><a href="/orlando-high-asset-divorce-lawyer/">Divorce Modification</a></li>
					<li><a href="/orlando-divorce-lawyer/mens-divorce/">Divorce Rights</a></li>
					<li><a href="/orlando-uncontested-divorce-lawyer/">Uncontested Divorce</a></li>
				</ul>
				<h3 class="paHeading">Family Law</h3>
				<ul class="sbPASList">
					<li><a href="/orlando-child-custody-lawyer/">Child Custody</a></li>
					<li><a href="/orlando-child-support-lawyer/">Child Support</a></li>
					<li><a href="/orlando-grandparents-rights-lawyer/">Grandparents' Rights</a></li>
					<li><a href="/orlando-paternity-lawyer/">Paternity</a></li>
					<li><a href="/orlando-prenuptial-agreements-lawyer/">Prenuptial Agreement</a></li>
					<li><a href="/orlando-property-division-lawyer/">Property Distribution</a></li>
					<li><a href="/orlando-alimony-lawyer/">Spousal Support</a></li>
					<li><a href="/orlando-fathers-rights-lawyer/">Visitation Rights</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php } ?>
<div id="sidebar" class="sidebar">
	<?php
		if (!is_page()) {
			sbArchives();
			sbAreas();
			sbTests();
		} else if (is_front_page()) {
			sbTests();
		} else if ( is_page_template() ) {
			sbTests();
		} else if (is_page(array(22, 28, 30, 34, 29, 167, 171, 179, 18, 36, 7, 9))) {
			sbTests();
		} else if (is_page(array(25, 32, 35, 31, 166, 168, 169, 1031))) {
			sbAreas();
		} else {
			sbAreas();
			sbTests();
		}
	?>
</div><!-- sidebar -->