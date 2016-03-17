define(function(){
	var swiperHandle = function() {
		var mySwiper = new Swiper ('.swiper-container', {
			autoplay: 3000,
		    loop: true,
		    
		    // 如果需要分页器
		    pagination: '.swiper-pagination',
		    
		    // 如果需要前进后退按钮
		    nextButton: '.swiper-button-next',
		    prevButton: '.swiper-button-prev',
		});
	};
	
	return {
		swiperHandle: swiperHandle
	};
});