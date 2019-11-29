function display(value1){
	document.getElementById('result').value += value1;
}
function solution(){
	x = document.getElementById('result').value;
	y = eval (x);
	document.getElementById('result').value = y;
}
function clearscreen(){
	document.getElementById('result').value = "";
}
function backspace(){
	var value = document.getElementById('result').value;
	document.getElementById('result').value = value.substr(0, value.length - 1);
}