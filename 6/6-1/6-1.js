window.onload = function() {
	/* 定义第一个参与运算的数字 */
	var firstNum = null;
	/* 定义第二个参与运算的数字 */
	var secondNum = null;
	/* 定义运算符 */
	var operator = null;
	/* 定义结果 */
	var result = null;
	/* 定义循环变量i */
	var i;
	var nBtn = document.getElementsByClassName('nBtn');				//获取数字按钮的对象集合
	for(i=0; i<nBtn.length; i++){								//循环读取
		nBtn[i].addEventListener('click', function(e){				//绑定点击事件
			if(firstNum == null){
				firstNum = this.innerHTML;
				showResult(firstNum);
			}else{		
				if(operator == null){
					firstNum += this.innerHTML;
					showResult(firstNum);
				}else{
					clearResult();
					if(secondNum == null){
						secondNum = this.innerHTML;
						showResult(secondNum);
					}else{
						secondNum += this.innerHTML;
						showResult(secondNum);
					}
				}
			}
		});
	}
	
	/* 获取双目运算符对象集合 */
	var dOpera = document.getElementsByClassName('double-opera');		//获取双目运算对象集合
	for(i=0; i<dOpera.length; i++){
		dOpera[i].addEventListener('click', function(e){
			if((firstNum != null) && (secondNum == null)){
				operator = this.innerHTML;
			}
			if((firstNum != null) && (secondNum != null) && (operator != null)){
				var res = doubCalcuShow(firstNum, secondNum, operator);
				showResult(res);
				firstNum = res;
				operator = this.innerHTML;
				secondNum = null;
			}
			
		});
	}
	
	/* 等于键点击事件 */
	var countObj = document.getElementById("count");
	countObj.addEventListener('click', function(e){
		if(firstNum == null || operator == null || secondNum == null || result != null){
			return false;
		}else if(operator == "/" && Number(secondNum) == 0){
			alert("亲，被除数不能为0哦!"); return;
		}else{
			showResult(doubCalcuShow(firstNum, secondNum, operator));
		}
	});
	
	/* 回退按钮点击事件 */
	var rBack = document.getElementById("returnBack");
	rBack.addEventListener('click', function(e){
		var rObj = document.getElementById("showMsgInput");		//获取屏幕显示对象
		showResult(rtrimStr(rObj.value));
	});
	
	/* 全部清除按钮点击事件 */
	var cAll = document.getElementById("clearAll");
	cAll.addEventListener('click', function(e){
		firstNum = null;
		secondNum = null;
		operator = null;
		clearResult();
		showResult(0);
	});
	
	/* 清除屏幕显示 */
	var cScreen = document.getElementById("clearScreen");
	cScreen.addEventListener('click', function(e){
		firstNum = null;
		secondNum = null;
		operator = null;
		clearResult();
		showResult(0);
	});
	
	/* 相反数点击事件 */
	var oppNum = document.getElementById("oppositeNumber");
	oppNum.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			showResult(-(sTemp.value));
		}else{
			return false;
		}	
	});
	
	/* 倒数点击事件 */
	var cDown = document.getElementById("countdown");
	cDown.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			var n = 1/sTemp.value;
			showResult((n.toString()).substr(0,12));
		}else{
			return false;
		}	
	});
	
	/* 百分比点击事件 */
	var perc = document.getElementById("percent");
	perc.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			showResult(sTemp.value / 100);
		}else{
			return false;
		}	
	});
	
	/* 求开方点击事件 */
	var sqrt = document.getElementById("sqrt");
	sqrt.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			showResult(handleRes(Math.sqrt(sTemp.value)));
		}else{
			return false;
		}	
	});
	
	/* 求sin点击事件 */
	var sinObj = document.getElementById("getSin");
	sinObj.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			showResult(handleRes(Math.sin(sTemp.value)));
		}else{
			return false;
		}	
	});
	
	/* 求cos点击事件 */
	var cosObj = document.getElementById("getCos");
	cosObj.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			showResult(handleRes(Math.cos(sTemp.value)));
		}else{
			return false;
		}	
	});
	
	/* 求tan点击事件 */
	var tanObj = document.getElementById("getTan");
	tanObj.addEventListener('click', function(e){
		var sTemp = document.getElementById("showMsgInput");
		if(sTemp.value != 0){
			showResult(handleRes(Math.tan(sTemp.value)));
		}else{
			return false;
		}	
	});
}


/* 判断字符是否存在于给定的数组中 */
function in_array(stringToSearch, arrayToSearch) {
	for (var s=0; s<arrayToSearch.length; s++) {
		var thisEntry = arrayToSearch[s].toString();
		if (thisEntry == stringToSearch) {
	   		return true;
	  	}
	}
 	return false;
}

/* 显示按钮数字 */
function showResult(msg) {
	var sArea = document.getElementById("showMsgInput");
	sArea.value = msg;
}

/* 清除显示 */
function clearResult(){
	var sArea = document.getElementById("showMsgInput");
	sArea.value = "";
}

/* 判断用户点击的是否为数字或. */
function isNumber(n) {
	return !isNaN(n) || n == ".";
}

/* 双目运算并显示结果 */
function doubCalcuShow(a, b, o){
	switch(o){
		case "+": return handleRes(Number(a) + Number(b)); break;
		case "-": return handleRes(Number(a) - Number(b)); break;
		case "*": return handleRes(Number(a) * Number(b)); break;
		case "/": return handleRes(Number(a) / Number(b)); break;
	}
}

/* 去掉字符串右侧的字符 */
function rtrimStr(str){
	str = str.toString();
	return str.substr(0,str.length-1);
}

/* 对计算结果进行处理 */
function handleRes(m){
	return parseFloat(m.toFixed(12));
}
