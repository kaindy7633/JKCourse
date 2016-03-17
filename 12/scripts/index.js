/*
*	使用了单例模式
*	使用对象字面量的方式定义了baiduIndex作为命名空间，避免以后增加代码会出现命名污染问题
*	单例中采用闭包封装了内部私有方法，只对外开放public_index方法
*/

var baiduIndex = {
	indexpage: function(){
		//初始化
		var _init = function(){
			_bind();
		};

		//绑定对象事件
		var _bind = function(){
			//右侧弹出更多菜单
			$('.moreProductBtn').on('mouseenter', function(){
				$(".container-right-menu").show(50);
			});

			//隐藏更多菜单
			$(".container-right-menu").on('mouseleave',function(){
				$(this).hide(50);
			});

			//账号弹出菜单
			$(".myaccount").hover(function() {
		        $(".account-menu-div").show()
		    },
		    function() {
		        $(".account-menu-div").hide()
		    });

		    $(".account-menu-div").hover(function() {
		        $(this).show()
		    },
		    function() {
		        $(this).hide()
		    });

		    //设置弹出菜单
		    $(".myset").hover(function() {
		        $(".page-set-div").show()
		    },
		    function() {
		        $(".page-set-div").hide()
		    });

		    $(".page-set-div").hover(function() {
		        $(this).show()
		    },
		    function() {
		        $(this).hide()
		    });

		    //TAB切换菜单
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

		//返回公有方法
		return {
			public_index: function(){
				_init();
			}
		}
	}
};

baiduIndex.indexpage().public_index();
