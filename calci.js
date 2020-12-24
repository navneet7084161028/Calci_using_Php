var disp = "";
var prev = "";
var opt = '+';
var result = '';

function clearScreen(){
	result=0;
	disp=0;
	prev=0;
	opt='+';
	document.getElementById("display").value = result;
}

function show(operand){
	disp += operand;
	document.getElementById("display").value = disp;
}

function arthmetic(operator){
	prev=result;
	// console.log(prev);
	$.ajax({
		type:'POST',
		url:'ajax.php',
		data:{'display_Val':disp, 'prev_Val':prev, 'opt':opt},

		success:function(data){
			result = data;
			document.getElementById("display").value = result;

		}
	})
	
	prev=result;
	disp='';
	opt=operator;
	
}

	




