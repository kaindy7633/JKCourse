(function(){
	//定义需要变色的DOM元素
	var navTheme = document.getElementById("navUl");										//导航栏背景颜色
	var secLeftUl = document.getElementById("sec-left-ul").children;						//左侧文字
	var secRightTopUl = document.getElementById("sec-right-top-ul").children;
	var secRightBtmUl = document.getElementById("sec-right-btm-ul").children;
	
	//定义localStorage对象
	var storage = window.localStorage;
	
	//定义localStorage的键名称
	var theme = "theme";
	
	//初始化时读取上一次的设置并设置主题
	window.onload = function(){
		getTheme();
	}
	
	//绑定点击事件
	var theObj = document.getElementById("theme").childNodes;
	for(var i=0; i<theObj.length; i++){
		theObj[i].addEventListener('click', function(){
			//alert(this.getAttribute("data-col"));
			switch(this.getAttribute("data-col")){
				case "chgThemeRed": 
					chgTheme("#ff0000");
					saveTheme("#ff0000");
					break;
				case "chgThemeGreen": 
					chgTheme("#398439");
					saveTheme("#398439");
					break;
				case "chgThemeBlue": 
					chgTheme("#0000ff");
					saveTheme("#0000ff");
					break;
				case "chgThemeOrange": 
					chgTheme("#FF6600");
					saveTheme("#FF6600");
					break;
				case "chgThemeViolet": 
					chgTheme("#871F78");
					saveTheme("#871F78");
					break;
			}
		});
	}
	
	//定义修改主题颜色方法
	var chgTheme = function(color){
		//导航栏
		navTheme.style.backgroundColor = color;
		//左侧文字
		for(var i=0; i<secLeftUl.length; i++){
			secLeftUl[i].style.color = color;
		}
		//右侧上部分文字
		for(var i=0; i<secRightTopUl.length; i++){
			var li = secRightTopUl[i].children;
			for(var j=0; j<li.length; j++){
				li[j].style.color = color;
			}
		}
		//右侧下部分文字
		for(var i=0; i<secRightBtmUl.length; i++){
			var li = secRightBtmUl[i].children;
			for(var j=0; j<li.length; j++){
				li[j].style.color = color;
			}
		}
	}
	
	//定义保存用户修改的主题
	var saveTheme = function(color) {
		if(storage) {									//如果浏览器支持localStorage
			storage.setItem(theme, color);
		}else{
			Cookie.write(theme, color);					//否则写入cookie
		}
	}
	
	//定义初始化时读取上一次的主题设置
	var getTheme = function() {
		if(storage.getItem(theme) != null){
			chgTheme(storage.getItem(theme));
		}else{
			chgTheme(Cookie.read(theme));
		}
	}
})();
