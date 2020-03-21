;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);
	var $slider_videos;
	var $slider_thumbs;

	$doc.ready(function() {
		$('.bg-image').each(function(){
			var src = $(this).attr('src');

			$(this).parent().css({
				backgroundImage: 'url(' + src + ')',
				backgroundSize: 'cover'
			});
		});

		if($('.header-primary .nav').length){
			var $obj = $('.header-primary .nav');
			var top = $obj.offset().top - parseFloat($obj.css('marginTop').replace(/auto/, 0));

			$(window).scroll(function (event) {
				// what the y position of the scroll is
				var y = $(this).scrollTop();

				// whether that's below the form
				if (y >= top) {
				  // if so, ad the fixed class
				  $obj.addClass('fixed');
				} else {
				  // otherwise remove it
				  $obj.removeClass('fixed');
				}
			});	
		}

		if ( $('#map').length > 0 ) {
			var lat = $('#map').data('lat');	
			var lng = $('#map').data('lng');

			initMap(lat, lng);
		};

		$('.btn-menu').on('click', function (event) {
		    $(this).toggleClass('active');  
		    
		    $('.wrapper').toggleClass('nav-open');
		    //Show/hide your navigation here
		    
		    event.preventDefault();
		});

		$('.scroll-links, .accordion').on('click','a', function(event){
			if($(this).data('target')){
				scroll_to($(this), $('.header .nav').outerHeight());
			} else {
				$(this).closest('li').toggleClass('active')
				$(this).closest('li').find('.menu-inner').slideToggle(500);
				$(this).closest('li').find('.accordion-content').slideToggle(500);	
			}
			
			event.preventDefault();
		});

		$('.show-bio-link').on('click', function(event){
			event.preventDefault();
			var index = $(this).closest('.artist').index();
			var _obj;

			if($win.width() < 961){
				_obj = $(this).closest('.artist').find('.artist-bio');
			} else {
				_obj = $(this).closest('.artists-row').find('.artists-text').find('.artist-bio').eq(index);
			}

			if(_obj.is(':visible')){
				_obj.slideUp();
			} else {
				$('.artist-bio').slideUp();
				_obj.slideDown();
			}
		});

		$('.artist-bio-close').on('click',function(event){
			event.preventDefault();

			$(this).closest('.artist-bio').slideUp(500);
		});
	});

	$(window).on('load resize', function(){
		var fixed_header_height = $('.header-secondary .nav').outerHeight();
		$('.wrapper').css({
			paddingTop: fixed_header_height
		});

		if($win.width() < 768 ){
			$slider_videos.trigger('destroy');
		}
	});

	$(window).on('load', function(){
		$('.slider').animate({
			'opacity': 1
		}, 400);

		var $carousel = $('.header-slider .slides');
		$carousel.carouFredSel({
			width:'100%',
			circular: true, 
			infinite: true, 
			responsive: true,
			scroll: {
				fx : "crossfade"
			},
			auto: {
				play: true, 
				timeoutDuration: 6000
			},
			items: {
				visible: 1
			}, 
			swipe: true, 
			mousewheel: false,
			onCreate: function () {
				$(window).on('resize', function () {
					var $firstItem = $carousel.children().first();
					$carousel.parent().add($carousel).height($firstItem.height());
				}).trigger('resize');
			}
		});

		$slider_videos = $('.slider-video .slides');
		$slider_videos.carouFredSel({
			width:'100%',
			circular: true, 
			infinite: true, 
			responsive: true,
			scroll: {
				fx : "crossfade"
			},
			auto: {
				play: true, 
				timeoutDuration: 6000
			},
			items: {
				visible: 1
			}, 
			swipe: true, 
			mousewheel: false,
			onCreate: function () {
				$(window).on('resize', function () {
					var $firstItem = $slider_videos.children().first();
					$slider_videos.parent().add($slider_videos).height($firstItem.height());
				}).trigger('resize');
			}
		});

		$slider_thumbs = $('.slider-thumbs .slides')
		$slider_thumbs.carouFredSel({
			responsive: true,
			circular: false,
			infinite: false,
			auto: {
				play: false,
				timeoutDuration: 6000
			},
			direction: 'up',
			prev: '.slider-thumbs .slider-prev',
			next: '.slider-thumbs .slider-next',
			items: {
				visible: {
					min: 2,
					max: 3
				},
				width: '100%'
			},
			onCreate: function () {
				$(window).on('resize', function () {
					var $firstItem = $slider_thumbs.children().first();
					$slider_thumbs.parent().add($slider_thumbs).height($firstItem.height());
				}).trigger('resize');
			}
		});

		$slider_thumbs.on('click','a',function(event){
			$slider_videos.trigger('slideTo', '#' + this.href.split('#').pop() );
			$slider_thumbs.find('a').removeClass('selected');
			$(this).addClass('selected');

			event.preventDefault();
		});
	});

	function scroll_to($item, $offset){
		$attrId = $item.data('target');

		if ( typeof( $attrId ) !== 'undefined' ) {
			var $targetSection = $( '*[data-section="'+ $attrId +'"]');
			
			$('html, body').animate({
				scrollTop: $targetSection.offset().top - $offset
			}, 1000);
		}
	}

	function initMap( lat, lng ) {
		var map;
		/*var pin_image = { url: 'css/images/pin-image.png' };*/

		var marker,
			mapCenter;

		var mapOptions = {
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: new google.maps.LatLng(lat, lng),
			draggable: false,
			scrollwheel: false,
			panControl: false,
			zoomControl: false,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false,
			styles: []
		}

		map = new google.maps.Map(document.getElementById('map'), mapOptions);

		marker = new google.maps.Marker({
			position: mapOptions.center,
			map: map
		});

		mapCenter = map.getCenter(); 
		
		function calculateCenter() {
			center = map.getCenter();
		}

		google.maps.event.addDomListener(map, 'idle', function() {
			calculateCenter();
		});

		google.maps.event.addDomListener(window, "resize", function() {
		    // Here you set the center of the map based on your "mapCenter" variable
		    map.setCenter(mapCenter);
		});

	} //end map initialize
})(jQuery, window, document);
