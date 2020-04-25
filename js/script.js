(function ($) {
	var htmlEL = $('html'),
	bodyEL = $('body'),
	htmlAndBody = $('html, body'),
	isFrontPage = bodyEL.hasClass('home'),
	rTO,
	mainMenu = $('#mainMenu'),
	syncMenu = $('#syncMenu'),
	fsMenuOn = false,
	lastPos,
	menuToggle = $('.menuToggle');

	//Form JS Begins
	$(".validateForm").validate();
	//Clear Inputs / Textareas that are not of the type 'submit'
	$('input,textarea').each(function() {if($(this).attr('type')!= 'submit'){var default_value = this.value;$(this).focus(function() {if(this.value == default_value) {this.value = '';}});$(this).blur(function() {if(this.value == '') {this.value = default_value;}});}$(this).hover(function(){$(this).addClass('display');},function(){$(this).removeClass('display');});});
	//Form JS Ends

	if( isFrontPage ) {
		$('#homeslides').dsk_slides({
			slideClass : 'homeslide',
			effect : 'fade',
			prevClass : 'prevSlide',
			nextClass : 'nextSlide',
			pause: 9000,
			onInit: function() {
				setTimeout(function() {
					$('#homeslide1').addClass('slideTxtAnimate');
				}, 400);
			},
			onStart: function() {
				setTimeout(function() {
					$('.incomingSlide').addClass('slideTxtAnimate');
				}, 400);
			},
			onComplete: function() {
				setTimeout(function() {
					$('.outgoingSlide').removeClass('slideTxtAnimate');
				}, 400);
			}
		});
	}
	
	if ( bodyEL.hasClass( 'page-template' ) ) {
		$('#homeslides').dsk_slides({
			slideClass : 'homeslide',
			effect : 'fade',
			prevClass : 'prevSlide',
			nextClass : 'nextSlide',
			pause: 9000,
			auto: false,
			onInit: function() {
				setTimeout(function() {
					$('#homeslide1').addClass('slideTxtAnimate');
				}, 400);
			},
			onStart: function() {
				setTimeout(function() {
					$('.incomingSlide').addClass('slideTxtAnimate');
				}, 400);
			},
			onComplete: function() {
				setTimeout(function() {
					$('.outgoingSlide').removeClass('slideTxtAnimate');
				}, 400);
			}
		});
	}

	$('.rcfCheck').submit(function(e){
		if(grecaptcha.getResponse() == "") {
			e.preventDefault();
			alert("Please show you're not a robot. Check the reCAPTCHA box.");
		}
	});

	//  < DOUBLE COLUMN NAV >
	$("#menu-item-122").addClass('multiCol');

	//Makes left and right anchors the same height
	$('.multiCol').hover(function(){
		if($('nav.mm').length === 0) {return false;}
		var directAnchors = $(this).children('ul').children('li').children('a'),
		count = 0, leftAnchor, leftAnchorHeight, rightAnchor, rightAnchorHeight;
		directAnchors.each(function(){
			var curAnchor = $(this);
			curAnchor.height('auto');
			var curAnchorHeight = curAnchor.height();
			count++;
			if(count % 2 != 0) {//odd
				leftAnchor = curAnchor;
				leftAnchorHeight = curAnchorHeight;
			} else {
				rightAnchor = curAnchor;
				rightAnchorHeight = curAnchorHeight;
				if(rightAnchorHeight > leftAnchorHeight) {
					leftAnchor.height(rightAnchorHeight);
					rightAnchor.height(rightAnchorHeight);
				} else {
					leftAnchor.height(leftAnchorHeight);
					rightAnchor.height(leftAnchorHeight);
				}
			}
		});
	});
	//  </ DOUBLE COLUMN NAV >

	(function(){
		// Vimeo Modal Window
		var modalContent = document.createElement('div');
		modalContent.classList.add('vmContent');
		var vimVidWrap = document.createElement('div');
		vimVidWrap.classList.add('vimeo-embed-cont');
		var vimVid = document.createElement('iframe');
		vimVid.classList.add('vm-video');
		vimVidWrap.appendChild(vimVid);
		modalContent.appendChild(vimVidWrap);
		var theBody = document.querySelector('body');
		//Create + Append Modal Window
		var vimeoLinks = document.querySelectorAll('a[data-vimeo]');
		for (var i = 0; i < vimeoLinks.length; i++) {
			vimeoLinks[i].addEventListener('click', function(e){
				e.preventDefault();
				//Set Vid Source
				var videoID = this.getAttribute('data-vimeo');
				var vimSrc = "https://player.vimeo.com/video/" + videoID + "?autoplay=true";
				vimVid.setAttribute('src', vimSrc);

				//Append Video + Modal
				var modal = document.createElement('div');
				modal.classList.add('vimeo-modal');

				modal.appendChild(modalContent);
				theBody.appendChild(modal);

				//Remove Modal Window
				modal.addEventListener('click',function(){
					theBody.removeChild(modal);
				});
			});
		}
	})();

	// HOME PAGE MORE CONTENT
	(function(){
		var moreButton = $('.mcMore');
		var buttonText = $('.mcVM');
		var contentBox = $('.mcBox2');
		moreButton.click(
			function() {
				if (contentBox.hasClass('contentDeployed')) {
					contentBox.removeClass('contentDeployed').addClass('hideContent');
					buttonText.text('view more');
				} else {
					contentBox.removeClass('hideContent').addClass('contentDeployed');
					buttonText.text('view less');
				}
		});
	})();

	$('.testList').dsk_slides({
		slideClass : 'test',
		effect : 'slide',
		prevClass : 'testPrev',
		nextClass : 'testNext',
		pause: 12000
	});


	//Practice Areas
	var areas = [
		{
			"title" : "Contested Divorce",
			"body" : "<p>As a divorce lawyer in Orlando, we are often are tasked with many highly complicated legal issues to tackle in a dissolution of marriage litigation. The list of these legal issues is extensive and if any of the following apply to your case then you need an experienced family law attorney on your side.</p>",
			"link" : "/orlando-divorce-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/contested_div_img.jpg"
		},
		{
			"title" : "Divorce Modification",
			"body" : "<p>When you’re facing divorce and you have significant assets, property division and alimony can quickly become points of contention and stress during the divorce process. Spouses may own multiple pieces of real estate, or they may have important interests in a business, together or separately. High net worth couples often have demanding jobs, and divorce can affect one’s focus and productivity, which only works to exacerbate the stress that’s already there. The Law Offices of Sean Smallwood, P.A. has experience handling high-asset divorce cases, and we can help you successfully overcome divorce with your life and your livelihood intact.</p>",
			"link" : "/orlando-high-asset-divorce-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/div_mod_img.jpg"
		},
		{
			"title" : "Divorce Rights",
			"body" : "<p>If you are seeking a divorce attorney for men and you have a case in the Orlando Florida area then call our office today to find out how we can help. Starting at the initial client consultation, our attorney can explain to you the pitfalls that men face in the divorce process.</p>",
			"link" : "/orlando-divorce-lawyer/mens-divorce/",
			"img" : "/wp-content/themes/smallwood/img/areas/div_rights_img.jpg"
		},
		{
			"title" : "Uncontested Divorce",
			"body" : "<p>Divorce is often portrayed as a long and complicated legal matter with divorce lawyers on both sides fighting in court—there is yelling, people are crying. But divorce doesn’t have to be this way, and, in many cases, it’s not. When both spouses agree their marriage isn’t working any longer, and they know how they want to handle divorce issues, such as child custody, child support, and property division, there is the option for an uncontested divorce in Florida. Law Offices of Sean Smallwood, P.A., we provide legal advice and representation in Orlando uncontested divorce cases because even though your divorce may be uncontested, you still need to protect your rights and interests.</p>",
			"link" : "/orlando-uncontested-divorce-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/uncon_div_img.jpg"
		},
		{
			"title" : "Child Custody",
			"body" : "<p>Sean Smallwood is an Orlando child custody attorney who understands that your future with your children will be determined by a list of legal factors in the Florida statute. He also understands that your custody lawyer must understand how to apply these factors to your case and the importance of having a strategy. Historically, child custody courts would almost always give mothers a vast majority of the parenting time with the child. Today, however, more Florida courts are giving mothers and fathers an equal footing when it comes to parenting time with the children.</p>",
			"link" : "/orlando-child-custody-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/child_cust_img.jpg"
		},
		{
			"title" : "Child Support",
			"body" : "<p>Anytime a family law and divorce attorney deals with child-related issues the case will at some point address the issue of child support. The lawmakers in Florida believed that every child has the right to be financially supported by both parents if at all possible. An experienced Orlando child support attorney can assist you in making sense of the confusion that goes along with child support guidelines, financial affidavits, income withholding orders and more. Child support in Florida is based largely on the net incomes of each parent, the amounts paid for child’s health insurance and daycare, and the total number of overnight visitations each parent has with the child.</p>",
			"link" : "/orlando-child-support-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/child_sup_img.jpg"
		},
		{
			"title" : "Domestic Violence",
			"body" : "<p>Grandparents often play an important role in their grandchildren’s lives, from offering sage advice to providing child care to being an extension of the family, which works to foster a sense of stability and belonging in children. When the parent-child relationship is threatened, grandparents often feel the need and responsibility to step in and do what they can to protect their children and grandchildren. However, Florida law regarding grandparents’ rights is limited and specific.</p>",
			"link" : "/orlando-grandparents-rights-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/dom_violence_img.jpg"
		},
		{
			"title" : "Paternity",
			"body" : "<p>Need your parental rights established? Call our paternity establishment attorney now Sean Smallwood is an Orlando, FL paternity establishment attorney who understands the importance of establishing your rights to custody or support. In recent years the number of unmarried couples having children seems to be on the rise. This has caused an increase in the number of petitions to establish paternity. In most cases, the most important aspect of the paternity case is to establish either child visitation or child support or both.</p>",
			"link" : "/orlando-paternity-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/paternity_img.jpg"
		},
		{
			"title" : "Prenuptial Agreement",
			"body" : "<p>Getting married is no doubt one of the most exciting times in one’s life, and the months and weeks leading up to your wedding should be among the most romantic. But during these days of happy anticipation, many couples find it beneficial and ultimately necessary to carve out some time to discuss future financial matters and to finalize those discussions in the form of a prenuptial agreement. At The Law Offices of Sean Smallwood, P.A. , we provide legal advice and representation regarding prenuptial agreements, as well as postnuptial agreements entered into after a marriage.</p>",
			"link" : "/orlando-prenuptial-agreements-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/prenup_img.jpg"
		},
		{
			"title" : "Property Distribution",
			"body" : "<p>Property division can be a tricky and frustrating aspect of divorce, especially if you have acquired significant assets and/or debt over the course of your marriage. And it’s not only the big things, like your home or business, that are difficult to divvy up—smaller household items aren’t necessarily easy to divide either. In some divorce cases, couples can agree on who will get what property, while others seek the help of a mediator to negotiate a settlement. Others won’t be able to resolve property division issues outside of court and will put the matter in a judge’s hands. However your property division needs to be handled, a skilled Orlando divorce attorney from The Law Offices of Sean Smallwood, P.A. can help.</p>",
			"link" : "/orlando-property-division-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/property_dis_img.jpg"
		},
		{
			"title" : "Spousal Support",
			"body" : "<p>One very common issue that divorce attorneys in Orlando, FL deal with is that of alimony. Also referred to as spousal support, this issue arises most commonly when the parties to the divorce have been married for a term longer than seven years and where one of the parties earns substantially more than the other. An Orlando alimony attorney familiar with alimony factors can explain whether your case could be an “alimony case”.</p>",
			"link" : "/orlando-alimony-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/spousal_support_img.jpg"
		},
		{
			"title" : "Visitation Rights",
			"body" : "<p>There is a major problem that dads face when looking for the right divorce lawyer to represent them in their men’s divorce, support, or custody case. That is whether or not they have chosen the right law firm to help them. This is because we all know that some attorneys are great, while others may fall short.</p>",
			"link" : "/orlando-fathers-rights-lawyer/",
			"img" : "/wp-content/themes/smallwood/img/areas/visit_rights_img.jpg"
		}
	]
	var pasInfo = $("<div class='pasInfo'>");
	var paTitle = $("<span class='paTitle'>");
	var paBody = $("<div class='paBody'>");
	var paMore = $("<a class='paMore'>Learn More</a>");
	// var paImg = $("<div class='pasImg'><img src='/wp-content/themes/smallwood/img/areas/contested_div_img.jpg' alt='Practice Area Image' /></div>");
	var paImg = $(".pasImg > img");
	console.log(paImg.attr('src'));
	$('.pasList a').click(function(e){
		e.preventDefault();
		//remove previous click changes
		$('.pasList a').removeClass('currArea');
		// $('.pasList > li > .pasInfo').remove();
		if ($(window).width() < 1120 ) {
			$('.pasList > li > .pasInfo').remove();
		}else{
			$('.pasInfoWrap > .pasInfo').remove();
		}
		//display new styles/elements
		$(this).addClass('currArea');
		for (var i = 0; i < areas.length; i++) {
			if ($(this).text() === areas[i].title) {
				$(paTitle).text(areas[i].title);
				$(pasInfo).append(paTitle);
				$(paBody).html(areas[i].body);
				$(paMore).attr("href", areas[i].link);
				$(paImg).attr("src", areas[i].img);
				console.log(areas[i].img + " " + paImg);
				if (paMore.attr("href") !== "") {
					$(paBody).append(paMore);
				}
				$(pasInfo).append(paBody);
				if ($(window).width() < 1120) {
					$(this).parent().append(pasInfo);
				}else{
					$('.pasInfoWrap').append(pasInfo);
					$(pasInfo).prepend(paImg);
				}
			}
		}
	});

	/*			HOME PAGE BADGES			*/
	(function() {
		if ($(window).width() > 1639) {
			return;
		}
		else {
			$('.hpBadges').slick({
				arrows: false,
				autoplay: true,
				autoplaySpeed: 0,
				cssEase: 'linear',
				dots: false,
				infinite: true,
				speed: 4000,
				slidesToShow: 1,
				pauseOnHover: false,
				centerMode: true,
				variableWidth: true,
				settings: "unslick"
			});
		}
	})();

	function slick_unslick_badges_resize() {
		if ($(window).width() > 1639 && $('.hpBadges').hasClass('slick-initialized')) {
			$('.hpBadges').slick('unslick');
			$('.hpBadge').removeAttr('tabindex');
		}
		else if ($(window).width() < 1640 && (!$('.hpBadges').hasClass('slick-initialized'))) {
			$('.hpBadges').slick({
				arrows: false,
				autoplay: true,
				autoplaySpeed: 0,
				cssEase: 'linear',
				dots: false,
				infinite: true,
				speed: 4000,
				slidesToShow: 1,
				pauseOnHover: false,
				centerMode: true,
				variableWidth: true,
				settings: "unslick"
			});
		}
	}

	/*			HOME PAGE VIDEOS			*/
	$('.hpVids').slick({
		dots: false,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 4000,
		speed: 1000,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 500,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	function bodyMenuClassToggle(goMob) {
		if(goMob) {bodyEL.removeClass('dsktp_menu').addClass('mob_menu');}
		else {bodyEL.removeClass('mob_menu').addClass('dsktp_menu');}
	}
	function mmToggle(goMob) {
		if(goMob) {mainMenu.removeClass('mm').addClass('mm_mob');}
		else {mainMenu.removeClass('mm_mob').addClass('mm');}
	}
	function menuer() {
		if(syncMenu.css('z-index') == 1) {
			bodyMenuClassToggle(false);
			if(!fsMenuOn) {mmToggle(false);}
		} else {
			bodyMenuClassToggle(true);
			if(!fsMenuOn) {mmToggle(true);}
		}
	}
	function fullScreenMenu(enableFS) {
		if(enableFS) {
			fsMenuOn = true;
			lastPos = bodyEL.scrollTop();
			if(lastPos == 0) {lastPos = htmlEL.scrollTop();}
			bodyEL.addClass('fsMenuOn');
			htmlAndBody.animate({scrollTop: 0}, 0);
			mmToggle(true);
		} else {
			fsMenuOn = false;
			bodyEL.removeClass('fsMenuOn');
			htmlAndBody.animate({scrollTop: lastPos}, 0);
			menuer();
		}
	}
	menuToggle.click(function(e){
		e.preventDefault();
		if(!fsMenuOn) {fullScreenMenu(true);}
		else {fullScreenMenu(false);}
	});

	var stickyZone = false,
	isTouchDevice = 'ontouchstart' in window || 'onmsgesturechange' in window;
	function stickyMenu() {
		if( $(window).scrollTop() > 50 ) {
			if(stickyZone) {return;}
			bodyEL.addClass('sticky_zone');
			stickyZone = true;
		} else {
			if(!stickyZone) {return;}
			bodyEL.removeClass('sticky_zone');
			stickyZone = false;
		}
	}

	//Animate on Scroll
	var animation_elements = $('.animated');
	function check_if_in_view() {
		var window_height = $(window).height();
		var window_top_position = $(window).scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each(animation_elements, function() {
		var element = $(this);
		var element_top_position = element.offset().top;
		var element_bottom_position = (element_top_position + element.outerHeight());

		if ((element_bottom_position - .1*window_height >= window_top_position) && (element_top_position + .1*window_height <= window_bottom_position)) {
			var desiredAnimation = element.data('animation') ? element.data('animation') : "fadeIn";
			element.addClass(desiredAnimation + " officiallyAnimated");
		}
		});
	}

	$(window).on('scroll resize', check_if_in_view);
	$(window).trigger('scroll');

	//  < jakesLazy >
	function jakesLazy() {
		var lazyEl = $('.lazy');
		var lazyElTotal = lazyEl.length;
		var deviceHeight = $(window).height();
		var lazyElements = new Array();
		for(var j = 0; j < lazyElTotal; j++) {
			lazyElements.push(lazyEl[j]);
		}
		lazyElements.forEach(myFunction);
		function myFunction(item, index) {
			var lazyElPos = $(item).offset();
			var lazyElHeight = $(item).height();
			var scrollNeeded = lazyElPos.top - deviceHeight;
			var docOffset = $(window).scrollTop();
			if ($(item).hasClass('imgLoaded')) {
				if ($(item).attr("data-src")) {
					$(item).removeAttr("data-src");
				}
				return;
			}
			else if (docOffset > (scrollNeeded - 200)) {
				if ($(item).attr("data-src")) {
					var newLink = $(item).attr("data-src");
					if ($('html').hasClass('webp')) {
						newLink = newLink.slice(0, -3) + "webp";
					}
					$(item).attr("src", newLink);
					$(item).removeAttr("data-src");
				}
				else {
					$(item).addClass('imgLoaded');
				}
			}
		}
	}
	//  </ jakesLazy >

	/* Init */
	menuer();
	if(isTouchDevice) {animation_elements.removeClass('animated');}
	stickyMenu();
	$('.menu-item-1127').addClass('nav_non_active');
	jakesLazy();

	/* Resize */
	$(window).resize(function(){
		rTO = setTimeout(function(){
			clearTimeout(rTO);
			menuer();
			stickyMenu();
			// Areas
			if ($(window).width < 1120 ) {
				$('.pasInfoWrap > .pasInfo').remove();
				$('.currArea').click();
			}
			else{
				$('.pasList > li > .pasInfo').remove();
				$('.currArea').click();
			}
			slick_unslick_badges_resize();
		}, 100);
	});

	/* Scroll */
	$(window).on({'scroll touchmove': function(){
		stickyMenu();
		jakesLazy();
	}});

	/* Target _blank Issue */
	(function(){
		$('a[target=_blank]').each(function(){
			var newREL = $(this).attr('rel');
			if(newREL === undefined) {newREL = "";}
			else {newREL += " ";}
			if(newREL.indexOf('noopener') === -1) {
				newREL += "noopener";
			}			
			$(this).attr('rel',  newREL)
		});
	})();
	//Allow dropdowns on touchscreens
	(function(){var touchedScreen = false;
	window.addEventListener('touchstart', function() {
		touchedScreen = true;
	});
	$('nav.mm a').click(function(e){
		if(!touchedScreen) {return true;}
		var clickedItem = $(this);
		if(clickedItem.siblings('ul').length === 0) {
			return true;
		}
		var clickedAttr = clickedItem.attr('data-clicked');
		if(typeof clickedAttr === typeof undefined) {
			e.preventDefault();
			clickedItem.attr('data-clicked', '1');
		}
	});})();
	//Sharing icons
	(function(){
		$('a.dskSharingIcon').click(function(){
			var url = $(this).data('url');
			$(this).attr('href', url);
		});
	})();
}(jQuery));

(function(){var head=document.getElementsByTagName("head")[0],fonts=document.createElement("link");fonts.rel="stylesheet",fonts.type="text/css",fonts.href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Vollkorn:400,400i|Lato|PT+Serif:400,700|Merriweather:400,400i&display=fallback",fonts.media="all",head.appendChild(fonts);
})();

//  < youtube Modal Window >
(function(){
	var responsiveHeight;
	var modal = $('<div class="youtube-modal">');
	var modalContent = $('<div class="ytContent">');
	var ytVidWrap = $('<div class="youtube-embed-cont">');
	var ytSrc;
	var ytVid = $('<iframe width="560" height="315" frameborder="0" allowfullscreen></iframe>');
	//Create + Append Modal Window
	$('a[data-youtube]').click(function(e){
		e.preventDefault();
		//Set Vid Source
		ytSrc = "https://www.youtube.com/embed/" + $(this).data('youtube') + "?autoplay=true&rel=0";
		ytVid.attr('src', ytSrc);
		//Append Video + Modal
		ytVidWrap.append(ytVid);
		modalContent.append(ytVidWrap);
		modal.append(modalContent);
		$('body').append(modal);
		//Remove Modal Window
		modal.click(function(){
			modal.remove();
		});
	});
})();
//  </ youtube Modal Window >