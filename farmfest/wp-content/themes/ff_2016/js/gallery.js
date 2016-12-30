$(function () {
	var pageCheck = $('.photo__gallery__wrapper');
	if(pageCheck.length){
		console.log('gallerying');
		photoA = 0;
		var photoI = setInterval( timer, 4000 );
		var photoItem = $('.photo__gallery__wrapper a');
		photoItem.eq(0).addClass("show");
		
		function timer() {
			console.log(photoItem);
			console.log(photoA);
			photoItem.eq(photoA).removeClass("show");
			photoItem.eq(photoA).next().addClass("show");
		    if ( photoA >= photoItem.length - 1) {
			    photoA = -1;
			    photoItem.eq(0).addClass("show");        
		    } 
		    photoA += 1;
		}
	}
});