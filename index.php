<!DOCTYPE html>
<html>
<head>
	<title>Vasilie - Home</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta charset='utf-8'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script >
		
		$(document).ready( function() {
				var nav = $("#nav_bottom");
				var home = $("#home");
				var proj = $("#proj");
				var about = $("#about");
				var cont = $("#cont");

				home.mouseenter(function(){	
						if (nav.height()!=0){
							nav.animate({ height:"0px" },300).animate({left:"200px" ,borderTopWidth:"2px", width:"45px"},100);
						} else  { if (nav.height()==0 && nav.width()<65) { nav.animate({left:"200px" ,borderTopWidth:"2px", width:"45px"},300);}}});
				proj.mouseenter(function(){	
						if (nav.height()!=0){
							nav.animate({ height:"0px" },300).animate({left:"289px" ,borderTopWidth:"2px", width:"64px"},100);
						} else  { if (nav.height()==0 && nav.width()<65) { nav.animate({left:"289px" ,borderTopWidth:"2px", width:"64px"},300);}}});
				about.mouseenter(function(){	
						if (nav.height()!=0){
							nav.animate({ height:"0px" },300).animate({left:"396px" ,borderTopWidth:"2px", width:"47px"},100);
						} else  { if (nav.height()==0 && nav.width()<65) { nav.animate({left:"396px" ,borderTopWidth:"2px", width:"47px"},300);}}});
				cont.mouseenter(function(){	
						if (nav.height()!=0){
							nav.animate({ height:"0px" },300).animate({left:"486px" ,borderTopWidth:"2px", width:"57px"},100);
						} else { if (nav.height()==0 && nav.width()<65) { nav.animate({left:"486px" ,borderTopWidth:"2px", width:"47px"},300);}}});
			

				
				
			});
		$(document).ready(function(){
			$("#krug").click(function(){
				var krug = $("#krug");
				krug.animate({height:"500px"},700).css("borderColor","#8C8C8C").css("backgroundColor","white");
				krug.mouseenter(function(){
					krug.animate({height:"20px"},700).css("borderColor","#FA5858");
				});
				$("#nak").show(2000);
			});	
		
			$("#home").click(function(){
				$("#nav_bottom").animate({left:"200px", width:"400px"},400);
				$("#nav_bottom").animate({borderRightWidth:"2px",borderLeftWidth:"2px"},10 );
				$("#nav_bottom").animate({height:"240px" },700, function(){
					$("#nav_bottom2").animate({left:"-20px"},350);
					$("#nav_bottom2r").animate({left:"+20px"},350);
				});
				
				
				$("#naslov").show(700);
			});
			$("#proj").click(function(){
				$("#nav_bottom").animate({left:"200px", width:"400px"},400);
				$("#nav_bottom").animate({borderRightWidth:"2px",borderLeftWidth:"2px"},10 );
				$("#nav_bottom").animate({height:"240px" },700);
				$("#naslov").show(700);
			});
			$("#about").click(function(){
				$("#nav_bottom").animate({left:"200px", width:"400px"},400);
				$("#nav_bottom").animate({borderRightWidth:"2px",borderLeftWidth:"2px"},10 );
				$("#nav_bottom").animate({height:"240px" },700);
				$("#naslov").show(700);
			});
			$("#cont").click(function(){
				$("#nav_bottom").animate({left:"200px", width:"400px"},400);
				$("#nav_bottom").animate({borderRightWidth:"2px",borderLeftWidth:"2px"},10 );
				$("#nav_bottom").animate({height:"240px" },700);
				$("#naslov").show(700);
			});
		});
	</script>



</head>
<body>
	<div id="content">
		<div id="nav">
			<div id="krug">
				<ul id="nak">
					<li>Nakaza</li>
					<li>Zardinjera</li>
					<li>Krompirusa</li>
					<li>Zlatokosa</li>
				
				</ul>
			</div>
			<div id="nav_top">
				<ul>
					<li><a id="home" > Home </a></li>
					<li><a id="proj" > Projects </a></li>
					<li><a id="about" > About </a></li>
					<li><a id="cont" > Contact </a></li>
				</ul>
			</div>

			<div id="nav_bottom">
				</div>
			<div id="glavno">
				<p>Dobrodosli nesto nesto zezanja lagana. 
					Dobrodosli nesto nesto zezanja lagana.Dobrodosli nesto nesto zezanja lagana. Dobrodosli nesto nesto zezanja lagana.
					Dobrodosli nesto nesto zezanja lagana.Dobrodosli nesto nesto zezanja lagana. Dobrodosli nesto nesto zezanja lagana.
				</p>
				<div id="nav_bottom2"></div>
				<div id="nav_bottom2r"></div>
			</div>

		</div>
		






	</div>

</body>
</html>