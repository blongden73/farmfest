$(function () {
	var pageCheck = $('.carousel__wrapper ul li');
	if(pageCheck.length){
		
		var cookie = Cookies.get('Farmfest_pop');
		var cookiePop = Cookies.get('cookies_pop');
		var visited = 'visited'
		var count = Cookies.get('cookie_count') || 0;
		count ++;
		Cookies.set('cookie_count', count);
		console.log('count', count);
		
		if(cookie != 'visited'){
			var facebookPop = $('.facebook__temp');
			function facebook(){
				facebookPop.addClass('display');
			}
			facebook();
			console.log('im here')
			Cookies.set('Farmfest_pop', visited);
			console.log('cookie_set');
		}	
		if(cookiePop != 'clicked'){
			
		}
	}
});