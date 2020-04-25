	<?php if (is_front_page()) { ?>
		<div class="mcMore clearLeft">
			<span class="mcVM">View More</span>
			<div class="mcMoreArrow">View More Arrow</div>
		</div>
	<?php } ?>
	<?php if(is_page()) { ?>
	<div id="shareThisPage">
		<span id="shareThisPageHead">Share This Page:</span>
		<?php echo shareThisWrapper() ?>
	</div>
	<?php } ?>
	</article>
	<?php get_sidebar(); ?>
</div><!-- contentArea -->
</div><!-- caWrapper -->
<?php function sxn_form() { ?>
<div id="quickContact">
	<div class="qcWrap">
		<span class="qcTitle animated" data-animation="fadeInUp">Schedule a Confidential Consultation Today.</span>
		<div class="qcRight">
			<?php nextclient_form(3); ?>
		</div> <!-- end qcRight -->
	</div>
</div> <!-- end quickContact -->
<?php } ?>
<?php function sxn_videos() { ?>
<div id="hpVidsWrapper">
	<div id="hpVidsOuterCont">
		<div id="hpVidsCont">
			<div class="hpVidsBox1 hpVidsBox animated" data-animation="fadeInLeft">
				<div class="hpVideoBoxIntro hpVideoBox">
					<div class="hpVideo">
						<div class="hpVideoImg"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/who_we_are.jpg" alt="Introduction Video" /></div>
					</div>
					<div class="hpPlayButtonOuter">
						<div class="hpPBInner1">
							<div class="hpPBInner2">
								<a class="hpPB" data-vimeo="312783929"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/hp_vid_button.png" alt="Video Play Button" /></a>
							</div>
						</div>
					</div>
				</div><?php /* hpVideoBoxIntro */ ?>
			</div>

			<div class="hpVidsBox2 hpVidsBox">
				<h2 class="hpVidsHeading animated" data-animation="fadeInDown">Our Video Gallery</h2>
				<div id="hpVidsMain" class="hpVids animated" data-animation="fadeInRight">

					<div class="hpVidBoxOuter">
						<div class="hpVidBoxOuter2">
							<div class="hpVidBox">
								<div class="hpVidVid">
									<div class="hpVidImg"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/who_should_pay_the_bills_on_the_housing.jpg" alt="Who Should Pay The Bills On The House During The Divorce?" /></div>
								</div>
								<div class="hpPlayButtonOuter">
									<div class="hpPBInner1">
										<div class="hpPBInner2">
											<a class="hpPB" data-vimeo="312783443"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/hp_vid_smaller_button.png" alt="FAQS Play Button" title="FAQS Play Button" /></a>
										</div>
									</div>
								</div>
							</div>
							<p class="hpVidBody">Who Should Pay The Bills On The House During The Divorce?</p>
						</div>
					</div>

					<div class="hpVidBoxOuter">
						<div class="hpVidBoxOuter2">
							<div class="hpVidBox">
								<div class="hpVidVid">
									<div class="hpVidImg"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/value_of_divorce_mediation.jpg" alt="The Value of Divorce Mediation" /></div>
								</div>
								<div class="hpPlayButtonOuter">
									<div class="hpPBInner1">
										<div class="hpPBInner2">
											<a class="hpPB" data-vimeo="312782523"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/hp_vid_smaller_button.png" alt="FAQS Play Button" title="FAQS Play Button" /></a>
										</div>
									</div>
								</div>
							</div>
							<p class="hpVidBody">The Value of Divorce Mediation</p>
						</div>
					</div>
					<?php
					/*
					<div class="hpVidBoxOuter">
						<div class="hpVidBoxOuter2">
							<div class="hpVidBox">
								<div class="hpVidVid">
									<div class="hpVidImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/hp_vid_4.jpg" alt="Child Support Modification Video" /></div>
								</div>
								<div class="hpPlayButtonOuter">
									<div class="hpPBInner1">
										<div class="hpPBInner2">
											<a class="hpPB" data-vimeo="Cy2agUb3OpA"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/videos/hp_vid_smaller_button.png" alt="FAQS Play Button" /></a>
										</div>
									</div>
								</div>
							</div>
							<p class="hpVidBody">Child Support Modification</p>
						</div>
					</div>
					*/
					?>
				</div><!-- hpVids -->
				<?php if ( !is_page_template() ) { ?>
				<a class="vidMore animated" data-animation="fadeInUp" href="https://www.youtube.com/channel/UCWV1rQaw4WZRP7D6g5bariA" target="_blank" rel="nofollow">
					<span class="vidVM">View More</span>
					<span class="vidMoreArrow">View More Arrow</span>
				</a>
				<?php } ?>
			</div>
		</div><!-- hpVidsCONT -->
	</div><!-- hpVidsOuterCONT -->
</div><!-- hpVidsWrapper -->
<?php } ?>
<?php function sxn_badges() { ?>
<div id="hpBadgesWrapper">
	<div id="hpBadgesCont">
		<div class="hpBadges animated" data-animation="flipInX">
			<div class="hpBadge1 hpBadge">
				<div class="hpBadgeInner1">
					<div class="hpBadgeInner2">
						<div class="hpBadgeImg1 hpBadgeImg">
							<img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/badges/super.png" alt="Super Lawyers">
						</div>
					</div>
				</div>
			</div>
			<div class="hpBadge2 hpBadge">
				<div class="hpBadgeInner1">
					<div class="hpBadgeInner2">
						<div class="hpBadgeImg2 hpBadgeImg">
							<img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/badges/10_best_2018.png" alt="10 Best 2018">
						</div>
					</div>
				</div>
			</div>
			<div class="hpBadge3 hpBadge">
				<div class="hpBadgeInner1">
					<div class="hpBadgeInner2">
						<div class="hpBadgeImg3 hpBadgeImg">
							<img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/badges/avvo_kite.png" alt="Avvo">
						</div>
					</div>
				</div>
			</div>
			<div class="hpBadge4 hpBadge">
				<div class="hpBadgeInner1">
					<div class="hpBadgeInner2">
						<div class="hpBadgeImg4 hpBadgeImg">
							<img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/badges/legal_elite.png" alt="Legal Elite">
						</div>
					</div>
				</div>
			</div>
			<div class="hpBadge5 hpBadge">
				<div class="hpBadgeInner1">
					<div class="hpBadgeInner2">
						<div class="hpBadgeImg5 hpBadgeImg">
							<img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/badges/tfb.png" alt="The Florida Bar">
						</div>
					</div>
				</div>
			</div>
			<div class="hpBadge6 hpBadge">
				<div class="hpBadgeInner1">
					<div class="hpBadgeInner2">
						<div class="hpBadgeImg5 hpBadgeImg">
							<img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/badges/bbb.png" alt="Accredited Business">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- hpBadgesCont -->
</div><!-- badgesWrapper -->
<?php } ?>
<?php function sxn_attorney() { ?>
<div id="hpAttWrap">
	<div class="hpAttCont">
		<h2 class="animated" data-animation="fadeInUp">Sean Smallwood, Esquire</h2>
		<div class="hpAttImg"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/attorney/hp_att_img.jpg" alt="Sean Smallwood, Esquire" /></div>
		<p class="animated" data-animation="fadeInLeft">Sean Smallwood is a family law and divorce lawyer for the Law Offices of Sean Smallwood, P.A. where he represents clients in all areas of family law and divorce. 100% of the practice is devoted to family law. As an attorney, he has helped many families with a wide variety of family law cases including Divorce, Child Custody, Child Support, and many other issues.</p>
		<p class="animated" data-animation="fadeInLeft">He has been recognized with awards for pro bono volunteering and has been recognized by Orlando style magazine as one of Orlando’s legal elite, Superlawyers, 10 Best Attorneys in Client Satisfaction, AVVO Superb rating, and many other recognitions.</p>
		<p class="animated" data-animation="fadeInLeft">Service to the community is another area where Mr. Smallwood excels, giving regular motivational speeches to underprivileged youth in conjunction with the Florida Department of Corrections in addition to offering a college scholarship contest to help students pay for their education.</p>
	</div>
</div><!-- hpAttWrap -->
<?php } ?>
<?php function sxn_practice_areas() { ?>
<div class="zn-practice-areas">
	<div class="pasWrap">
		<span class="pasTitle animated" data-animation="slideInUp">Our Orlando Divorce & Family Lawyers Can Help!</span>
		<span class="pasSubtitle animated" data-animation="slideInUp">Choose one of our <span>practice areas</span> to learn More.</span>
		<div class="pasListBox animated" data-animation="slideInLeft">
			<div class="pasListBoxInner">
				<h3 class="paHeading">Divorce</h3>
				<ul class="pasList">
					<li>
						<a class="currArea" href="">Contested Divorce</a>
						<div class="pasInfo">
							<span class="paTitle">Contested Divorce</span>
							<div class="paBody"><p>Mr. Marsee handles all types of divorces and family law matters. His negotiation and litigation skills allow him to efficiently and effectively represent clients in contested and uncontested divorces, in complex divorces involving substantial assets, and in highly contested custody issues. His prior investigative experience in questioning people and analyzing facts is extremely helpful to him in the courtroom.</p></div>
						</div>
					</li>
					<li><a href="">Divorce Modification</a></li>
					<li><a href="">Divorce Rights</a></li>
					<li><a href="">Uncontested Divorce</a></li>
				</ul>
				<?php if ( !is_page_template() ) { ?>
				<h3 class="paHeading">Family Law</h3>
				<ul class="pasList">
					<li><a href="">Child Custody</a></li>
					<li><a href="">Child Support</a></li>
					<li><a href="">Domestic Violence</a></li>
					<li><a href="">Paternity</a></li>
					<li><a href="">Prenuptial Agreement</a></li>
					<li><a href="">Property Distribution</a></li>
					<li><a href="">Spousal Support</a></li>
					<li><a href="">Visitation Rights</a></li>
				</ul>
				<?php } ?>
			</div>
		</div>
		<div class="pasInfoWrap animated" data-animation="slideInRight">
			<div class="pasInfo">
				<div class="pasImg"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/areas/contested_div_img.jpg" alt="Practice Area Image" /></div>
				<span class="paTitle">Contested Divorce</span>
				<div class="paBody"><p>As a divorce lawyer in Orlando, we are often are tasked with many highly complicated legal issues to tackle in a dissolution of marriage litigation. The list of these legal issues is extensive and if any of the following apply to your case then you need an experienced family law attorney on your side.</p></div>
			</div>
		</div>
	</div>
</div> <!-- end zn-practice-areas -->
<?php } ?>
<?php if (is_front_page()) { ?>


<?php
	sxn_practice_areas();
	sxn_attorney();
	sxn_badges();
	sxn_videos();
	sxn_form();
}
if ( is_page_template() ) {
	sxn_practice_areas();
	sxn_attorney();
	sxn_badges();
	sxn_videos();
	sxn_form();
}
?>

<footer id="mainFooter">
	<div class="footerTop">
		<img class="mfLogo animated lazy" data-animation="slideInDown" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/footer.png" alt="Sean Smallwood, P.A. Attorney At Law">
		<div class="mfContact animated" data-animation="fadeInUp">
			<div class="mfContactBox">
				<div class="mfAddress">
					<span class="mfTitle">Address:</span>
					<p>390 N. Orange Ave., Suite 2300<br> Orlando, FL 32801</p>
				</div>
				<div class="mfPhone">
					<span class="mfTitle">Phone:</span>
					<a href="tel:+14075746155">407-574-6155</a>
				</div>
				<?php if ( !is_page_template() ) { ?>
				<ul class="fSocials">
					<li class="fs1 fs">
						<a href="https://www.facebook.com/seansmallwoodpa/" target="_blank" rel="nofollow"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/f_socials.png" alt="Facebook" /></a>
					</li>
					<li class="fs2 fs">
						<a href="https://twitter.com/smallwoodpa" target="_blank"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/f_socials.png" alt="Twitter" /></a>
					</li>
					<li class="fs3 fs">
						<a href="https://www.linkedin.com/in/Orlando-divorce-attorney/" target="_blank" rel="nofollow"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/f_socials.png" alt="LinkedIn" /></a>
					</li>
					<li class="fs4 fs">
						<a href="https://www.youtube.com/channel/UCWV1rQaw4WZRP7D6g5bariA" target="_blank" rel="nofollow"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/f_socials.png" alt="Youtube" /></a>
					</li>
				</ul>
				<?php } ?>
			</div>
			<a class="mfMap" href="https://goo.gl/maps/gPLiRwK8a6x" target="_blank" rel="nofollow"><img class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/f_map.jpg" alt="Office Location" /></a>
		</div>
	</div>
	<div id="mmBrandingWrapper">
		<div id="mmBranding">
			<img id="logo-mmm" class='lazy' data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/mmm.png" alt="MileMark Media - Practice Growth Solutions">
			<p>&copy; <?php copyrightYears(2019); ?> Sean Smallwood, P.A., Attorney at Law. All rights reserved. <br>This law firm website is managed by <a target="_blank" href="https://www.milemarkmedia.com/">MileMark Media</a>.</p>
			<?php if ( !is_page_template() ) { ?>
			<ul class="fNav" id="fNav1">
				<li><a href="/site-map/">Site Map</a></li>
				<li><a href="/disclaimer/" rel="nofollow">Disclaimer</a></li>
			</ul>
			<?php } ?>
		</div><!-- #mmBranding -->
	</div>
</footer>
</div><!-- wrapper -->

<div id="sync">
	<span id="syncMenu" class="syncItem"></span>
</div>

<script>
//Set body and nav class to desktop ones as necessary
(function(){
	var syncMenu = document.getElementById('syncMenu');
	if(syncMenu === null || !document.defaultView || !document.defaultView.getComputedStyle) {return false;}
	var smZindex = document.defaultView.getComputedStyle(syncMenu, null).getPropertyValue('z-index');
	if(smZindex > 0) {
		var b = document.getElementsByTagName('body')[0];
		var menu = document.getElementById('mainMenu');
		b.classList.remove('mob_menu');
		b.classList.add('desktop_menu');
		menu.classList.remove('mm_mob');
		menu.classList.add('mm');
	}
})()
</script>

<script><?php include(get_stylesheet_directory() . '/js/head.min.js') ?></script>
<script>head.js({ jQuery: "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" });
head.ready("jQuery", function() {head.load("https://d78c52a599aaa8c95ebc-9d8e71b4cb418bfe1b178f82d9996947.ssl.cf1.rackcdn.com/dsk_slides/dsk_slides.1.0.2.min.js", "//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js", "https://www.google.com/recaptcha/api.js", "<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js", function() {head.load("<?php echo get_stylesheet_directory_uri(); ?>/js/<?php echo DSKdotMinCheck('script.min.js'); ?>?t=2020")});});</script>

<?php wp_footer(); ?>

</body></html>