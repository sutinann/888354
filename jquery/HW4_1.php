<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.highlight{
		background-color: yellow;
	}
		p{
			border-style: solid;
    		padding: 40px;
		}
		h2{
			position: absolute;
    		top: 12%;
    		left: 20px;
    		background-color: white;
    		padding: 10px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#check").click(function(){
				var a = $("p").text();
				var b = $("#text1").val();
				var search = new RegExp(y, "gi");
				var ma = a.match(search);
				$("#ans").html(ma.length);
				if(ma){
					$("p").html(x.replace(search,function(match){
						return "<span class='highlight'>" + match + "</span>";
					}))
				}
			});
		});
	</script>
</head>
<body>
	<center>
		Search : <input type="text" id="text1"><br><br>
		found : <span id="ans"></span> word<br><br>
		<button id="check">Check</button>
	</center>
	<h2>The Article : Continuous Digital Health</h2>
    <p>The way we deal with our health is undergoing a major transformation, not only because mobile Internet technology has made it possible to have continuous access to personal health information, but also because breaking the trend of ever-growing healthcare costs is increasingly necessary. Estimates indicate that more than 70 percent of the world population will have a smartphone by 2017. Connectivity, interoperability, sensing, and instant feedback through smartphones all provide new opportunities for gaining insights into our health behavior. Such insights are improving, and understanding what motivates people to make healthy changes throughout their lifetimes is becoming more important. Internet technology not only lets us continuously monitor an individual's physiological and psychological state, but also allows for building up a lifelong record of physical, mental, and social health.</p>
</body>
</html>