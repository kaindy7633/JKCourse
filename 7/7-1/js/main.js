/******************************************************
 * RequireJS 入口文件
 * jquery-module: jQuery模块
 * showRightMenu-module: 页面右侧划出菜单JS模块
 * showNavHideMenu-module: 顶部菜单移入后弹出菜单模块
 * pageContentTab-module: 页面主内容tab切换模块
 ******************************************************/

require.config({
	baseUrl: "./js",
	paths: {
		"jquery": "jquery.min-2.1.4",
		"showRightMenu": "showRightMenu",
		"showNavHideMenu": "showNavHideMenu",
		"pageContentTab": "pageContentTab" 
	}
});

require(['jquery', 'showRightMenu', 'showNavHideMenu', 'pageContentTab'], function($, showRightMenu, showNavHideMenu, pageContentTab){
	showRightMenu.show();
	showNavHideMenu.show();
	pageContentTab.contentSwitch();
});
