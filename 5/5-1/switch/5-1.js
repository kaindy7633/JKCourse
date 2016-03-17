/* SWITCH版本 */
window.onload = function myFunction(){
	var obj = document.getElementById('submit');
	obj.onclick = function(){
		var num = document.getElementById('userInput').value;
		num = 11 - Math.ceil(num/10);
		switch(num){
			case 10: show('10等生'); break;
			case 9: show('9等生'); break;
			case 8: show('8等生'); break;
			case 7: show('7等生'); break;
			case 6: show('6等生'); break;
			case 5: show('5等生'); break;
			case 4: show('4等生'); break;
			case 3: show('3等生'); break;
			case 2: show('2等生'); break;
			case 1: show('1等生'); break;
			default: show('非法数据');
		}
	}
}

/* Private Function */
function show(str){
	var res = document.getElementById('result');
	res.innerHTML = str;
}