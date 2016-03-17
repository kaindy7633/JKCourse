window.onload = function(){
	//定义待查询数组
	var strArr = ["a","x","b","d","m","a","k","m","p","j","a"];
	var searchBtn = document.getElementById('begin-search');
	searchBtn.onclick = function(){
		var tempArr = [];	//定义空数组存放临时数据
		var sNum = [];		//定义对应字符的出现次数
		var sKey = [];		//定义当前字符的对应的key
		var resArr = [];	//结果数组
		for(var i=0; i<strArr.length; i++){
			if(!in_array(strArr[i],tempArr)){		//如果当前检索元素不在临时数组里
				tempArr.push(strArr[i]);			//将当前字符存入临时数组
				sNum.push(1);						//出现次数
				sKey.push(i);						//当前字符的key
			}else{
				for(var j=0; j<tempArr.length; j++){
					if(strArr[i] == tempArr[j]){
						sNum[j]++;
						sKey[j] = sKey[j]+"-"+i;
						break;
					}
				}
			}
		}
		//对三个数组按出现次数进行组合
		for(var x=0; x<sNum.length; x++){
			var tStr = sNum[x]+"&"+tempArr[x]+"&"+sKey[x];
			resArr.push(tStr);
		}
		//按出现次数的数字进行排序
		resArr.sort();
		//取得最后一个元素（即出现次数最多的）
		var lastEle = resArr[resArr.length - 1];
		
		//取得最后一个元素并输出结果
		var tString = lastEle.split("&");
		var resStr = "出现次数最多的字母是："+tString[1]+"<br />出现的次数为："+tString[0]+"<br />出现的顺序为："+tString[2];
		var sObj = document.getElementById("info-show");
		sObj.innerHTML = resStr;
	}
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