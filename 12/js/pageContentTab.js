define(function(){
	var contentSwitch = function(){
		$('.content-nav ul li').on('click', function(){
			if($(this).hasClass('content-nav-active') == false){
				var sibEles = $(this).siblings();		//获取当前点击元素的所有兄弟元素结合
				sibEles.each(function(i){
					if($(this).hasClass('content-nav-active')){
						$(this).removeClass('content-nav-active');		//移除选中样式
						//隐藏显示内容
						var navName = $(this).text();
						switch(navName) {
							case "我的关注": $('.my-attention').hide(); break;
							case "导航": $('.my-nav').hide(); break;
							case "视频": $('.my-movie').hide(); break;
							case "购物": $('.my-shopping').hide(); break;
							case "推荐": $('.my-recommend').hide(); break;
						}
					}
				});
				
				//为当前点击li添加样式并显示内容
				$(this).addClass('content-nav-active');
				switch($(this).text()) {
					case "我的关注": $('.my-attention').show(); break;
					case "导航": $('.my-nav').show(); break;
					case "视频": $('.my-movie').show(); break;
					case "购物": $('.my-shopping').show(); break;
					case "推荐": $('.my-recommend').show(); break;
				}
			}
			
		});
	};
	
	return {
		contentSwitch: contentSwitch
	};
	
});
