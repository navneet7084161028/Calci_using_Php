<!DOCTYPE html>
<html>
<head>
	<title>Working Calculator..</title>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>

			.first{
					border-radius: 15px;
					background-color:  #404040;
					width: 380px;
					margin: auto;
					height: auto;
					padding: 20px;
					margin-top: 30px;
				}
			input[type="text"]
				{
					width: 94%;
					height: 70px;
					padding : 10px;
					font-size: 25px;
					background-color: #c7dec7;;
					border-radius: 10px;
				}
			input[type="button"]
				{
					width: 86px;
					height: 60px;
					padding: 10px;
					font-size: 25px;
					font-weight: bold;
					border-radius: 10px;
					background-color: #2F4F4F;
					color: white;
					margin: 3px;
			}
		#del
			{
				width: 100%;
				background-color:#2F4F4F;
				color: white;
				border-radius: 10px;
			}

	</style>
</head>
<body>
		<div class="first">
			<h1 style="text-align: center;color:white; font-weight: 600;">Calculator</h1>

			<form name="myform">

				<input type="text" id="display" value="0" /><br>
				<br>
				
				<input type="button" value="9" onclick="show('9')"/>
				<input type="button" value="8" onclick="show('8')"/>
				<input type="button" value="7" onclick="show('7')"/>
				<input type="button" value="+" onclick="arthmetic('+')" style="color: #DC143C;"/><br>
				<br>
				<input type="button" value="6" onclick="show('6')"/>
				<input type="button" value="5" onclick="show('5')"/>
				<input type="button" value="4" onclick="show('4')"/>
				<input type="button" value="-" onclick="arthmetic('-')"/><br>
				<br>
				<input type="button" value="3" onclick="show('3')"/>
				<input type="button" value="2" onclick="show('2')"/>
				<input type="button" value="1" onclick="show('1')"/>
				<input type="button" value="*" onclick="arthmetic('*')"/><br>
				<br>
				<input type="button" value="." onclick="show('.')"/>
				<input type="button" value="0" onclick="show('0')"/>
				<input type="button" value="/" onclick="arthmetic('/')"/>
				<input type="button" value="=" onclick="arthmetic('=')"/><br>
				<br>

				<input type="button" value="CLEAR" onclick="clearScreen()" id="del"/>
				
			</form>
		</div>
</body>
<script type="text/javascript" src="calci.js"></script>
</html>