<html>
<head>
	<title>portfolio - test</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		
		body {
			font-family: MohaveBold;
			margin: 0px;
			padding: 0px;
		}	


		#container1 {
			width: 100%;
			height:100%;
			position:absolute;
			z-index: 1;
			background-color: #49565C;
			overflow: hidden;

		} 
		@font-face {
    		 font-family: MohaveBold;
    		 src: url('Mohave-Bold.otf'); 
			}
		@font-face {
    		 font-family: Mohave;
    		 src: url('Mohave.otf'); 
			}

		#container2 {
			width: 0%;
			height:100%;
			position:absolute;
			z-index: 2;
			background-color: wheat;
			overflow: hidden;
		} 	
		#container3 {
			width: 0%;
			height:100%;
			position:absolute;
			z-index: 3;
			background-color: yellow;
			float: right;
			overflow: hidden;
		} 
		#container4 {
			width: 0%;
			height:100%;
			position:absolute;
			z-index: 4;
			background-color: blue;
			overflow: hidden;
		} 
		#button1 {
			position: relative;
			width: 15px;
			height: 30px;
			background-color: white;
			color: #879DA8;
			z-index: 1;
			margin-left: 49px;
			top: -50px;

			opacity: 0;
			

		}
		#button1:hover {
			cursor: pointer;

		}
		#button2 {
			position: relative;
			width: 100px;
			height: 30px;
			background-color: white;
			color: gray;
			z-index: 2;
			left: 100px;
			top: 300px;

		}
		#button3 {
			position: relative;
			width: 100px;
			height: 30px;
			background-color: white;
			color: gray;
			z-index: 3;
			left: 220px;
			top: 100px;

		}
		#button4 {
			position: relative;
			width: 100px;
			height: 30px;
			background-color: white;
			color: gray;
			z-index: 4;
			left: 300px;
			top: 200px;

		}
		#button:hover {
			cursor: pointer;
		}
		#container1 p {
			margin: 0px;
			top: -100px;
			left: -20px;
			position: relative;
			opacity: 0;
			text-align: center;
		}
		@-webkit-keyframes tocak /*--for webkit--*/{
			0% 	{ -webkit-transform: rotate(0deg);}
    	
    		100%{ -webkit-transform: rotate(1440deg);}                       

		}
		#tocak {

			border-radius: 100px;
			width: 100px;
			height: 100px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 30px;
			border:5px dashed wheat;
			opacity: 0;
			position: relative;
			-webkit-animation: tocak 5s;
        	animation:tocak 5s;
        	top:-90;
        	left: -20;
        
		}
		#static {

			position: relative;
			opacity:0;
			color: white;
		}
		#drzac {
			margin-left: auto;
			margin-right: auto;
			width: 150px;
			height: 500px;
		}
		

	</style>
	
	

	<div id="container1">
		
		<p id='naslov'style="font-size:40px; padding-top:250px; color:wheat; padding-bottom:10px;">VASILIJE MILENKOVIC</p>
		<p id="text"style="font-size:20px; color:#879DA8; margin-top:20px; font-family:Mohave;">CURRICULUM VITAE</p>
			<div id="drzac">	
				<div id="tocak"></div>
				<div id="static">Loading..</div>
				<div id="button1">Next</div>
			</div>
	</div>
	
	<div id="container2">
		<div id="button2">Dalje</div>
	</div>
	
	<div id="container3">
		<div id="button3">Dalje</div>
	</div>
	<div id="container4">
		<div id="button4">Dalje</div>
	</div>
	<script>
		$(document).ready(function(){
			$("#button1").click(function(){
				$("#container2").animate({width:"100%"},1000);

			});
			$("#button2").click(function(){
				$("#container3").animate({width:"100%"},1000);

			});
			$("#button3").click(function(){
				$("#container4").animate({width:"100%"},1000);

			});
			$("#tocak").animate({opacity:"1"},700);
			$("#static").animate({opacity:"1"},2000);
			$("#static").animate({opacity:"0"},2000);
		});
		$(document).ready(function(){
			setTimeout(function(){
				$("#naslov").animate({opacity:"1"},1000, function(){$("#text").animate({opacity:"1"},1000, function(){$("#button1").animate({opacity:"1"},1000);});});
				
				
			},4000);
			setInterval(function(){
				$("#tocak").animate({rotate:"30deg"},2000)
			},2000);
		});

	</script>
</body>
</html>