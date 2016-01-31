$(function (){
	//function to seperate the levels of the line up 
	function lineUp(){
		var middleTier = $('.line__up__wrapper ul li.category-medium');
		var last = middleTier.length -1;
		var smallTier = $('.line__up__wrapper ul li.category-small');
		var lastSmall = smallTier.length -1;
		//adds a div after the last medium level to seperate the line up this also removes the last "/"
		$(middleTier[last]).addClass('last').after('<li class="last-medium"></li>');
		$(smallTier[lastSmall]).addClass('last').after('<li class="last-medium"></li>');
	};
	lineUp();
	
	//get the page url
	var pathname = window.location.pathname;
	var pathnameFinal = pathname.replace('/', '').replace('/', '');
	console.log('url', pathname);
	if(pathname === '/'){
		pathnameFinal = 'home';
	}
	$('body').addClass(pathnameFinal);
	
	//display header at a certain point on the page on mobile
	$(window).scroll(function(){
		var scroll = $('body').scrollTop();
		if($('.buy__button').length){
			var header = $('.buy__button').offset().top;
			var headerFade = header - scroll; 
			console.log(Math.floor(headerFade));
			if(headerFade <= 100){
				$('header.mobile').addClass('display');
			}else{
				$('header.mobile').removeClass('display');
			}
		}	
	//adds the colour to the header on the pages needed	
		if($('.illustration__panel--news').length){
			var illustrationTop = $('.illustration__panel--news').offset().top;
			var illustrationPos = illustrationTop - scroll;
			if(illustrationPos <= 100){
				$('header.desktop').addClass('coloured');
			}else{
				$('header.desktop').removeClass('coloured');
			}
		}else if($('.single__title').length){
			console.log('running');
			var singleTitle = $('.single__title').offset().top;
			var singleTitlePos = singleTitle - scroll;
			if(singleTitlePos <= 100){
				$('header.desktop').addClass('coloured');
			}else{
				$('header.desktop').removeClass('coloured');
			}
		}	
	});
	
	//styles ticket numbers
	if($('.tickets').length){
		var ticketPrices = $('li.ticket__price p'); 
		for(i = 0; i < ticketPrices.length; i++){
			function ticketFormat(){
				console.log('running');
				var ticketPriceReformat = ticketPrices.eq(i).html().replace(',', ' —');
				ticketPrices.eq(i).html(ticketPriceReformat);
				console.log(ticketPrices.eq(i).html().replace(',', '%'));
			}
			ticketFormat();
		}
		var tickets = $('li.ticket__price');
		var ticketProvider = $('li.ticket__provider');
		for(i = 0; i < tickets.length; i++){
			function ticketClass(){
				console.log('ticket class');
				if(tickets.length === 1){
					tickets.addClass('col1');
				}
				if(tickets.length === 2){
					tickets.addClass('col2');
				}
				if(tickets.length === 3){
					tickets.addClass('col3');
				}
				if(tickets.length === 4){
					tickets.addClass('col4');
				}
			}
		}
		ticketClass();
		for(i = 0; i < ticketProvider.length; i++){
			function ticketProviderClass(){
				console.log('ticket class');
				if(ticketProvider.length === 1){
					ticketProvider.addClass('col1');
				}
				if(ticketProvider.length === 2){
					ticketProvider.addClass('col2');
				}
				if(ticketProvider.length === 3){
					ticketProvider.addClass('col3');
				}
				if(ticketProvider.length === 4){
					ticketProvider.addClass('col4');
				}
			}
		}
		ticketProviderClass();
	}
	
	//click cross for pop up
	$( ".close__facebook" ).click(function() {
		console.log('clicking');
		$('.facebook__temp').toggleClass('display');
	});
		
	
	//fix the coloured header for the line up page
	if(pathnameFinal === 'line-up' || pathnameFinal === 'latest' || pathnameFinal === 'tickets'){
		$('header.desktop').addClass('coloured');
	}
	
	if( pathnameFinal === 'ethos' || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('header.mobile').addClass('display');
	}
	
	//mobile header overlay
	$('.hamburger__menu').click(function(){
		console.log("click")
		$('.hamburger__overlay').toggleClass('display');
	});
	
	//mobile sub nav{
	$('.open__close').click(function(){
		console.log('click')
		$('.sub__nav').toggleClass('open');
	});
	
	//bind lightbox to elements
	$( '.swipebox' ).swipebox();
	
	//bind stellar to page
	$(window).stellar();
	
	
});