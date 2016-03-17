define(function(){
	var show = function(){
		//给按钮绑定鼠标划入事件
		$(".moreProductBtn").on('mouseenter',function(){
			$(".container-right-menu").fadeIn();
		});
		
		$(".container-right-menu").on('mouseleave',function(){
			$(this).fadeOut();
		});
	};
	
	return {
		show: show
	};
});
