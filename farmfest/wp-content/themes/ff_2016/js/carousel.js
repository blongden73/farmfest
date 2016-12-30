$(function () {
	var pageCheck = $('.carousel__wrapper ul li');
	if(pageCheck.length){
		console.log('carouselling');
		a = 0;
		var i = setInterval( timer, 4000 );
		var slide = $('.carousel__wrapper ul li');
		slide.eq(0).addClass("fadeIn");
		
		function timer() {
			slide.eq(a).removeClass("fadeIn");
			slide.eq(a).next().addClass("fadeIn");
		    if ( a > pageCheck.length - 2) {
			    a = -1;
			    slide.eq(0).addClass("fadeIn");        
		    } 
		    a += 1;
		}
	}
});