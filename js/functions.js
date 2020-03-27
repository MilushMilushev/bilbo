;(function($, window, document, undefined) {
	let $win = $(window);
	let $doc = $(document);

	$doc.ready(function() {
		$('.btn-menu').on('click', function (event) {
		    $(this).toggleClass('active');  
		    
		    $('.wrapper').toggleClass('nav-open');
		    //Show/hide your navigation here
		    
		    event.preventDefault();
		});
	});
})(jQuery, window, document);
