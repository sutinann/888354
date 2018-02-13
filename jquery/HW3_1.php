<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var sumary;
		$(document).ready(function(){
			$("#button").click(function(){
				var a = (Math.floor(Math.random() * 999) + 1);
				var b = (Math.floor(Math.random() * 999) + 1);
				$("#num1").html(x);
				$("#num2").html(y);
				sumary = a+b;
				return sumary;
			});
			$("#send").click(function(){
				var get = $("#ans").val();
				if(sumary==get){
					$("#result").html("This is correct");
					$("#result").css("color","green");
				}
				else{
					$("#result").html("That's wrong.The answer is "+sumary);
					$("#result").css("color","red");
				}
			});
		});
	</script>
</head>
<body>
	<center>
		<button id="button">Random Number</button><br><br>
		<span id="num1">?</span>+<span id="num2">?</span>=
		<input type="text" id="ans"><br><br>
		<button id="send">Send Answer</button><br><br>
		Result : <span id="result"></span>
	</center>
</body>
</html>