<html>
<head>
	<title>test kruzni pokret</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>


	<script type='text/javascript'>
		$(document).ready(function(){

			$('#button1').click(function(){
				$('#krug').css({'-webkit-animation': 'krugrotate 7s infinite forwards'});
				
			});

		});

		$(document).ready(function(){
			$('#button1').click(function(){
				var x;
				var fy;
				var y;

				for (x=0; x<200; x++) {
					fy=40000-x*x;
					y=Math.sqrt(fy);
					document.getElementById("smrda").style.left=x;
					document.getElementById("smrda").style.top=y;

				}

			});
		});
	</script>
	<style type='text/css'>

		@-webkit-keyframes krugrotate{

			from {
				-webkit-transform:rotate(0deg);
				left:-500px;	}
		
			to {-webkit-transform:rotate(270deg);
				left:290px;
			}

		}
		#button1 {
			background-color: gray;
		}
		#kocka {

			border-bottom: 2px solid black;
			width: 100%;
			height: 60%;
			position: absolute;
			margin-left:auto;
			margin-right: auto;
			top: 200px;
			

		}
		#krug {
			-webkit-animation-fill-mode: forwards; 
			position: relative;
			height: 360px;
			width: 360px;
			border-radius: 400px;
			border:15px dashed #49565C;
			left: -500px;
		}
		#smrda {
			height: 540px;
			width: 540px;
			
			position: absolute;
			
			-webkit-animation:pruga 3s infinite;
		}
		#kakaroc {
		float:left;
		position: relative; 
		width: 220px;
		margin-left: 200px;
		background-color: green;
		height: 100px; 
		}
		@-webkit-keyframes pruga{

			from {
				-webkit-transform:rotate(0deg);
			

				 	}
		
			to {-webkit-transform:rotate(360deg);
				

			}
		}
		#smrda1 {
			height: 540px;
			width: 540px;
			left: 500px;
			float: right;
			-webkit-animation:pruga 1.5s infinite;
			position: absolute;
			
			
		}
		#kakaroc1 {
		float:left;
		position: relative; 
		width: 220px;
		margin-left: 200px;
		background-color: green;
		height: 100px; 
		}

	</style>
	<div id="smrda">
		<div id="kakaroc">
		</div>
	</div>
	<div id="smrda1">
		<div id="kakaroc1">
		</div>
	</div>
	<div id='kocka'>
		<div id='krug'>
			
		</div>
	<div id='button1'>Click me</div>


	</div>
</body>
</html>