/* 页面初次加载发送AJAX请求图片轮播数据及前5条新闻数据 */
$(function(){
	//加载Loading动画
	$(".spinner").show();
	//发送ajax请求数据
	$.ajax({
		type: "post",
		url: "http://localhost/learn/8/index.php",
		async: true,
		dataType: "json",
		data: "requestTime=first",
		success: function(msg) {
			//隐藏加载图标
			$(".spinner").hide();
			//加载轮播图
			$(".carousel-inner").append('<div class="item active"><img src="images/slide/'+msg.carousel[0]['pic_address']+'" style="width:394px;height:246px;" /></div>');
			for(var i=1; i<msg.carousel.length; i++){
				$(".carousel-inner").append('<div class="item"><img src="images/slide/'+msg.carousel[i]['pic_address']+'" style="width:394px;height:246px;" /></div>');
			}
			//加载热点新闻
			$(".hot-info").append('<span>热点</span>');
			for(var i=0; i<msg.hotnews.length; i++){
				$(".hot-info").append('<div>'+msg.hotnews[i]['hot_title']+'&nbsp;></div>')
			}
			
			//加载新闻列表
			for(var i=0; i<msg.newslist.length; i++){	
				//遍历列表，根据显示模式选择加载的图文排列方式
				switch(msg.newslist[i]['show_mode']) {
					case '1' :
						$(".news-items").last().after('<div class="news-items mar-l-r f-row row"><img src="images/items/'+msg.newslist[i]['news_pic']+'" /><div><strong class="items-title">'+msg.newslist[i]['news_title']+'</strong><span class="items-content">'+msg.newslist[i]['news_content']+'</span><div><span class="send-time">3小时前</span><span class="info-source">'+msg.newslist[i]['news_source']+'</span></div></div></div>');
						break;
					case '2' :
						$(".news-items").last().after('<div class="news-items mar-l-r f-row row"><div><strong class="items-title">'+msg.newslist[i]['news_title']+'</strong><span class="items-content">'+msg.newslist[i]['news_content']+'</span><div><span class="send-time">1分钟前</span></div></div></div>');
						break;
					case '3' :
						$(".news-items").last().after('<div class="news-items mar-l-r f-row row"><div><strong class="items-title">'+msg.newslist[i]['news_title']+'</strong><ul class="f-row"><li class="f-1"><img src="images/items/'+msg.newslist[i]['news_pic']+'" class="more-pic" /></li><li class="f-1"><img src="images/items/'+msg.newslist[i]['news_pic_2']+'" class="more-pic" /></li><li class="f-1"><img src="images/items/'+msg.newslist[i]['news_pic_3']+'" class="more-pic" /></li></ul></div></div>');
						break;
				}
			}
			
			//显示加载更多按钮
			$(".load-more").css("top", "0");
			
			//显示页脚
			$("footer").css("top", "0");
		}
	});
	
	/* 加载更多新闻按钮 */
	$(".load-more button").on("click", function(){
		$(".load-more").hide();
		$(".spinner").show();
		$.ajax({
			type: "post",
			url: "http://localhost/learn/8/index.php",
			async: true,
			dataType: "json",
			data: "requestTime=loadmore",
			success: function(msg) {
				$(".spinner").hide();
				//加载更多新闻列表
				for(var i=0; i<msg.length; i++){	
					//遍历列表，根据显示模式选择加载的图文排列方式
					switch(msg[i]['show_mode']) {
						case '1' :
							$(".news-items").last().after('<div class="news-items mar-l-r f-row row"><img src="images/items/'+msg[i]['news_pic']+'" /><div><strong class="items-title">'+msg[i]['news_title']+'</strong><span class="items-content">'+msg[i]['news_content']+'</span><div><span class="send-time">3小时前</span><span class="info-source">'+msg[i]['news_source']+'</span></div></div></div>');
							break;
						case '2' :
							$(".news-items").last().after('<div class="news-items mar-l-r f-row row"><div><strong class="items-title">'+msg[i]['news_title']+'</strong><span class="items-content">'+msg[i]['news_content']+'</span><div><span class="send-time">1分钟前</span></div></div></div>');
							break;
						case '3' :
							$(".news-items").last().after('<div class="news-items mar-l-r f-row row"><div><strong class="items-title">'+msg[i]['news_title']+'</strong><ul class="f-row"><li class="f-1"><img src="images/items/'+msg[i]['news_pic']+'" class="more-pic" /></li><li class="f-1"><img src="images/items/'+msg[i]['news_pic_2']+'" class="more-pic" /></li><li class="f-1"><img src="images/items/'+msg[i]['news_pic_3']+'" class="more-pic" /></li></ul></div></div>');
							break;
					}
				}
			}
		});
	});
	
});
