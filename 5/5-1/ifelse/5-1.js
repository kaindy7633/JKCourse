/* IFELSE版本 */
window.onload = function myFunction(){
	var obj = document.getElementById('submit');
	obj.onclick = function(){
		var num = document.getElementById('userInput').value;
		if(num >= 0 && num <= 9){
			show('10等生');
		}else if(num >= 10 && num < 20){
			show('9等生');
		}else if(num >= 20 && num < 30){
			show('8等生');
		}else if(num >= 30 && num < 40){
			show('7等生');
		}else if(num >= 40 && num < 50){
			show('6等生');
		}else if(num >= 50 && num < 60){
			show('5等生');
		}else if(num >= 60 && num < 70){
			show('4等生');
		}else if(num >= 70 && num < 80){
			show('3等生');
		}else if(num >= 80 && num < 90){
			show('2等生');
		}else if(num >= 90 && num <= 100){
			show('1等生');
		}else{
			show('非法数据');
		}
	}
}

/* Private Function */
function show(str){
	var res = document.getElementById('result');
	res.innerHTML = str;
}