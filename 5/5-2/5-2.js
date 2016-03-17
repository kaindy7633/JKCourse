window.onload = function(){
	//获取点击按钮
	var submitObj = document.getElementById('calculation');
	submitObj.onclick = function(){
		//获取第一个操作数
		var firstOperandObj = document.getElementById('first-operand');
		if(!isNum(firstOperandObj.value)){
			alert('第一个操作数不能为空或不是数字！');
			firstOperandObj.focus();
			return;
		}
		//获取第二个操作数
		var sencodOperandObj = document.getElementById('second-operand');
		if(!isNum(sencodOperandObj.value)){
			alert('第二个操作数不能为空或不是数字！');
			sencodOperandObj.focus();
			return;
		}
		//获取操作符、验证被除数是否合法，并执行计算操作
		var operatorObj = document.getElementById('operator');
		//验证操作符
		if(operatorObj.selectedIndex == 0){
			alert('请选择操作符!'); return;
		}
		//如果操作为除法验证被除数
		if(operatorObj.selectedIndex == 4 && sencodOperandObj.value == 0){
			alert('被除数不能为0哦!');
			sencodOperandObj.focus();
			return;
		}
		//执行计算操作
		myCalculation(Number(firstOperandObj.value), Number(sencodOperandObj.value), operatorObj.selectedIndex);
	}
}

/* 判断用户是否输入和是否为数字操作数 */
function isNum(userInput) {
	if(userInput == '' || isNaN(userInput)){
		return false;
	}else{
		return true;
	}
}

/* 执行计算并显示结果 */
function myCalculation(firstNum, secondNum, operandtion) {
	switch(operandtion){
		case 1: show(firstNum + secondNum); break;
		case 2: show(firstNum - secondNum); break;
		case 3: show(firstNum * secondNum); break;
		case 4: show(firstNum / secondNum); break;
		default:  show('未知错误');
	}
}

/* 显示结果 */
function show(res) {
	var resObj = document.getElementById('result');
	resObj.innerHTML = res;
}
