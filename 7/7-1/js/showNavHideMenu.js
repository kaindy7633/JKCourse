define(function(){
	var show = function(){
		$('.myaccount').on('mouseenter', function(){
			$('.account-menu-div').show();
		});
		
		$('.account-menu-div').on('mouseleave', function(){
			$(this).hide();
		});
		
		$('.myset').on('mouseenter', function(){
			$('.page-set-div').show();
		});
		
		$('.page-set-div').on('mouseleave', function(){
			$(this).hide();
		});
	};
	
	return {
		show: show
	};
});
