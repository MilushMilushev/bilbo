;(function($, window, document, undefined) {
	let $win = $(window);
	let $doc = $(document);

	$doc.ready(function() {
		$('.nav-trigger').on('click', function(event) {
			$(this).toggleClass('active');
			
			$('.wrapper').toggleClass('nav-open');
			
			event.preventDefault();
		});

		$('.form-quote').on('change', '.product-select', function() {
			let selectedIndex = $(this).find(':selected').index()
			let qtty = '960'
			if(selectedIndex % 2 !== 0) {
				qtty = '480'
			}

			$(this).closest('.form-row-has-cols').find('.form-info em').text(qtty)
			$(this).closest('.form-row-has-cols').find('.field-number').attr('min', qtty)
		})

		$('#add-row').on('click', function(event) {
			let rows = document.getElementsByClassName('form-row-has-cols');
			let parent = $(this).parent();

			let isQttyValid = true
			$('.form-col-qtty input').each(function(index, obj) {
				const minQtty = parseInt($(this).closest('.form-controls').find('em').text())
				const value = parseInt(obj.value)
				if(!Number.isInteger(value) || obj.value < minQtty ){
					isQttyValid = false
				}
			})

			if(!isQttyValid) {
				$(this).closest('form').find('button[type="submit"]').trigger('click')
				return
			}

			//Label
			let clone = rows[rows.length-1].cloneNode(true);
			let index = rows.length + 1
			$(clone).find('.form-col-item label').attr('for', `item${index}`)
			$(clone).find('.form-col-item select').attr('name', `item${index}`)
			$(clone).find('.form-col-item select').attr('id', `item${index}`)

			$(clone).find('.form-col-qtty label').attr('for', `qtty${index}`)
			$(clone).find('.form-col-qtty input').attr('name', `qtty${index}`)
			$(clone).find('.form-col-qtty input').attr('id', `qtty${index}`)
			$(clone).find('.form-col-qtty input').val('')
			$(clone).find('.form-col-qtty .form-info em').text('960')
			$(clone).insertBefore(parent)
			event.preventDefault()
		})

		$('#remove-row').on('click', function(event) {
			event.preventDefault()
			let rows = document.getElementsByClassName('form-row-has-cols');
			console.log(rows.length)
			if(rows.length > 1) {
				rows[rows.length-1].remove()
			}
		})
	});

	$win.on('load', function() {
		$('.slider .slides').slick({
			dots: true,
			arrows: false,
			fade: true,
		})
	});
})(jQuery, window, document);
