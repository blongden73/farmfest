$(function () {
	var pageCheck = $('.carousel__wrapper ul li');
	if(pageCheck.length){
		
		var cookie = Cookies.get('Farmfest_pop');
		var cookiePop = Cookies.get('cookies_pop');
		if(cookie != 'visited'){
			console.log('im here')
			Cookies.set('Farmfest_pop', 'visited');
			console.log('cookie_set');
		}
		
		if(cookiePop != 'clicked'){
			
		}
	}
});