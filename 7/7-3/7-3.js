$(document).ready(function(){
	//绑定窗体加载事件
	$(window).on('load', function(){
		//执行图片排列
		imageLocal();
		//模拟需动态加载的图片数据
		var imageData = {"data":[{"src":"1.jpg"},{"src":"2.jpg"},{"src":"3.jpg"},{"src":"4.jpg"},{"src":"5.jpg"},{"src":"6.jpg"},
						{"src":"7.jpg"},{"src":"8.jpg"},{"src":"9.jpg"},{"src":"10.jpg"},{"src":"11.jpg"},{"src":"12.jpg"},
						{"src":"13.jpg"},{"src":"14.jpg"},{"src":"15.jpg"},{"src":"16.jpg"},{"src":"17.jpg"},{"src":"18.jpg"},
						{"src":"19.jpg"},{"src":"20.jpg"},]};
		//滚动动态加载事件
		window.onscroll = function(){
			//如果满足加载条件
			if(scrollLoad()){
				$.each(imageData.data, function(index, value) {
					var box = $("<div>").addClass("box").appendTo($("#container"));			//动态加载box
					var content = $("<div>").addClass('content').appendTo(box);				//动态加载content
					$("<img>").attr("src","images/"+$(value).attr("src")).appendTo(content);
				});
				imageLocal();
			}
		};
	});
});

/*****************************
 *	页面初始化对图片进行排列函数
 ****************************/
function imageLocal() {
	var box = $('.box');									//定义装载图片的盒子
	var boxWidth = box.eq(0).width();						//获取盒子宽度
	var num = Math.floor($(window).width()/boxWidth);		//获取页面每行能装载的图片个数
	var boxArr = [];
	box.each(function(index, value){						//遍历盒子列表
		var boxHeight = box.eq(index).height();				//获取每个盒子的高度
		if(index < num){									//如果是第一排的图片
			boxArr[index] = boxHeight;						//将图片高度存入数组
		}else {
			var minBoxHeight = Math.min.apply(null, boxArr);
			var minBoxIndex = $.inArray(minBoxHeight, boxArr);
			$(value).css({
				"position": "absolute",
				"top":　minBoxHeight,
				"left": box.eq(minBoxIndex).position().left
			});
			boxArr[minBoxIndex] += box.eq(index).height();
		}
	});
}

/*****************************
 *	页面是否加载动态图片
 ****************************/
function scrollLoad() {
	//获取盒子对象
	var box = $('.box');						
	//获取加载点，最后一个box到页面顶端的高度加上该box高度的一半
	var lastBoxHeight = box.last().get(0).offsetTop + Math.floor(box.last().height()/2);
	//文档高度
	var documentHeight = $(document).width();
	//滚动高度
	var scrollHeight = $(window).scrollTop();
	//返回判断
	return (lastBoxHeight < scrollHeight + documentHeight) ? true : false;
}
