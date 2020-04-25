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

	function homeslide_height() {
		var screen = $(window).height();
		//  set a minimum height for homeslide content
		if ( screen <= 568 ) {
			screen = 568;
		}
		//  subtract from height the size of the other elements
		var mobile_marketing_subtract = $('.mobile_phone_number').outerHeight() + $('.mobile_logo_main').outerHeight() + $('.mobile_content').outerHeight() + $('#mmiWrapper').outerHeight() + $('.article h1').outerHeight() + 20;
		return screen - mobile_marketing_subtract;
	}

	$('.homeslides').dsk_slides({
		slideClass : 'homeslide',
		effect : 'fade',
		prevClass : 'prevSlide',
		nextClass : 'nextSlide',
		pause: 7000,
		speed: 400,
		start: 1,
		onInit: function() {
			setTimeout(function() {
				$('.homeslide_1').addClass('slide_text_animate');
			}, 400);
			setTimeout(function() {
				$('.homeslide_1').addClass('slide_text_animate_2');
			}, 600);
			setTimeout(function() {
				$('.homeslide_1').addClass('slide_text_animate_3');
			}, 800);
		},
		onStart: function() {
			setTimeout(function() {
				$('.incomingSlide').addClass('slide_text_animate');
			}, 400);
			setTimeout(function() {
				$('.incomingSlide').addClass('slide_text_animate_2');
			}, 600);
			setTimeout(function() {
				$('.incomingSlide').addClass('slide_text_animate_3');
			}, 800);
		},
		onComplete: function() {
			setTimeout(function() {
				$('.outgoingSlide').removeClass('slide_text_animate');
			}, 400);
			setTimeout(function() {
				$('.outgoingSlide').removeClass('slide_text_animate_2');
			}, 600);
			setTimeout(function() {
				$('.outgoingSlide').removeClass('slide_text_animate_3');
			}, 800);
		}
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

	$('.sxn_badges .element_slide').dsk_slides({
		slideClass : '.slide_cont',
		effect : 'fade',
		pause: 5000,
		speed: 400,
	});

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

	//  < resize_slide >
	function resize_slide( slides, slide ) {
		if( slides.length === 0) { return; }
		slides.addClass('get_height');
		var slides_height = 0;
		slide.each(function(){
			var slide_height = $(this).outerHeight();
			if( slide_height > slides_height ) { slides_height = slide_height; }
		});
		slides.removeClass('get_height').height(slides_height);
	}

	$('.sb_testimonials .testNav a').click(function(e){
		e.preventDefault();
	});
	//  < resize_slide >

	var rotating_slides = $('.sb_testimonials .rotating_slides'), //  slides container
	rotating_slide = $('.sb_testimonials .rotating_slides .slide_cont'); //  individual slide
	rotating_slides.dsk_slides({
		slideClass : 'slide_cont',
		effect : 'slide',
		pause: 12000,
		speed: 300,
		prevClass : 'testPrev',
		nextClass : 'testNext',
	});

	//  < init >
	menuer();
	//	if(isTouchDevice) {animation_elements.removeClass('animated');}
	stickyMenu();
	$('.homeslides').css('height', homeslide_height() );
	resize_slide( rotating_slides, rotating_slide );
	jakesLazy();
	//  </ init >

	//  < on load >
	$(window).on("load", function() {
		$('.homeslides').css('height', homeslide_height() );
	});
	//  </ on load >

	//  < resize >
	$(window).resize(function(){
		rTO = setTimeout(function(){
			clearTimeout(rTO);
			menuer();
			stickyMenu();
			$('.homeslides').css('height', homeslide_height() );
			resize_slide( rotating_slides, rotating_slide );
		}, 100);
	});
	//  </ resize >

	//  < scroll >
	$(window).on({'scroll touchmove': function(){
		stickyMenu();
		jakesLazy();
	}});
	//  </ scroll >

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
	//  </ target _blank issue >
}(jQuery));

(function(){var head=document.getElementsByTagName("head")[0],fonts=document.createElement("link");fonts.rel="stylesheet",fonts.type="text/css",fonts.href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Vollkorn:400,400i,700,700i&display=fallback",fonts.media="all",head.appendChild(fonts);
})();

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