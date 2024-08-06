<html>
   <head>
        <title>PrimAir</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="contactstyle.css">
		<link rel="shortcut icon" type="image/png" href="favicon.ico">
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scripts/slide.js"></script>
	<div class="containercontainer">
		<div class="headercontainer">
				<div class="logo">
				<a href="index.php">
				<img src="primairlogomain.png" width="100%" height="100%"> </a>
				</div>
				<a href="index.php">
				<div class="logoname"><img src="primairlogoname.png" width="100%" height="100%"></div> </a>
				<ul>
					<li><a href="index.php">Acasă</li></a>
					<li> <a href="mainpictures.php">Poze</a>
						<ul>
							<li> <a href="unitatimain.php"> Unitați </a> </li>
							<a href="comingsoon.php"><li>Nu se vede</li></a>
							<a href="comingsoon3.php"><li>Se vede</li></a>
						</ul>
					</li>
					<li><a href="aboutusmain.php">Despre Noi </a></li>
					<li>
					<a href="studieremain.php"> Studiere </a>
						<ul>
							<a href="proiectaremain.php"> <li>Proiectare</li> </a>
							<a href="comingsoon2.php"><li>Service</li></a>
						</ul>
					</li>
					<li><div id="highlight">Contact</div> </li>
				</ul>
		</div>
	</div>
   </head>
   
	<body>
		<div class="wrapper">
			<div class="footretextbox">
						<div class="beutytext">	<p>Dacă aveți orice intrebări sau nelămuriri nu ezitați să ne contactați telefonic sau prin e-mail.</p>
													<p>Oricănd de Luni păna Vineri între orele 8-17 suntem available.</p>
						</div>
						<div class="wtfdiv">
						<p><h3>Informații de contact</h3></p> 
							<p>Telefon : 0745640232</p>
							<p>E-Mail : primairtek@gmail.com</p>
						</div>
							<div class="facebookicon"><a href="https://www.facebook.com/primairtek/"
							 align="left"><img src="facebookicon.png" border-radius: "50%" width="80%" height="80%"></a> </div>
								<div id="footermapsbox">
					<script>
						function initMap(){
							var location={lat:46.771210, lng:23.623635};
							var map=new google.maps.Map(document.getElementById("footermapsbox"),{
							zoom:12,
							center:location
						})
					}				
					</script>
									<script async defer src="https://maps.googleapis.com/maps/api/js?key=
									AIzaSyC4H6xtiUeFws_9PT17lcMTMmAmNni0kVA&callback=initMap"></script>
								</div>
						</div>
						<div class="footerborder"><p>Copyright <?php echo date("Y"); ?></div>
					</div>
			</div>
    </body>
</html>