<html>
    <head>
        <title>PrimAir</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/png" href="favicon.ico">
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="scripts/slide.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v6.0"></script>
			

<div class="containercontainer">
	<div class="headercontainer">
            <div class="logo">
			<a href="index.php">
			<img src="primairlogomain.png" width="100%" height="100%"> </a>
			</div>
			<a href="index.php">
            <div class="logoname"><img src="primairlogoname.png" width="100%" height="100%"></div> </a>
            <ul>
				<li><div id="highlight">Acasă</div></li>
                <li> <a href="mainpictures.php"> Poze</a>
					<ul>
						<li> <a href="unitatimain.php"> Unitați </a> </li>
						<a href="comingsoon.php"><li>Nu se vede</li></a>
						<a href="comingsoon3.php"><li>Se vede</li></a>
					</ul>
				</li>
                <li> <a href="aboutusmain.php"> Despre Noi </a> </li>
                <li>
				<a href="studieremain.php"> Studiere </a>
					<ul>
						<a href="proiectaremain.php"> <li>Proiectare</li> </a>
						<a href="comingsoon2.php"><li>Service</li></a>
					</ul>
				</li>
                <li><a href="contactmain.php">Contact</a></li>
            </ul>
    </div>
</div>
    </head>
    <body>
        <div class="mainbody">
          <div class="mainbox">
           <div class="slideshow-container">
                    <div class="i-slideshow-container">
                        <div class="main">
                            <img src="images/mainslideshow/haz.jpg" id = "main" style="width:100%" height="100%">
                        </div>
                    </div>
                      	<div class="textcontainer">
                       	<h1>De ce să ventilăm?</h1>
                        <p>Fără apă, fără măncare trâim câteva zile, fără aer doar căteva minute.</p>
                        <p>Ocupația noastră principală este:</p> <p> Ventilație cu recuperare de căldură!</p>
                    </div>
                 </div>
               </div>    
                    
				<div class="wrapper">
					<div class="fixtext">
					<p>Lângă ventilație firma se mai ocupă și cu:</p>
					</div>
					<div class="borderclass">
					</div>
						<div class="secondtextcontaier">
							<p>Instalații termice.</p>
						</div>
						<div class="subpic1">
							 <div class="heat">
								  <img src="images/heatslideshow/futes1.jpg" id="heat" style="width:100%" height="100%">
								</div>
							 <div class="dotcontainer">
								  <span class="heatdot1" onclick='slideit(-1, "heat", heat)'></span> 
								  <span class="heatdot2" onclick='slideit(1, "heat", heat)'></span>
								</div>
						</div>
                  <div class="border"> </div>
						<div class="subpic2">
						 <div class="water">
								  <img src="images/waterslideshow/viz1.jpg" id="water" style="width:100%" height="100%">
						 		</div>
							 <div class="dotcontainer">
								  <span class="waterdot1" onclick='slideit(-1, "water", water)'></span> 
								  <span class="waterdot2" onclick='slideit(1, "water", water)'></span>
								</div>
						</div>
						<div class="thirdtextcontainer">
							<p>Instalații sanitare</p>
						</div>
						<div class="border"> </div>
						<div class="fourthtextcontainer"> 
							<p>Aspirator centralizat</p>
						</div>
						<div class="subpic3">
							<div class="vacum">
								  <img src="images/vacumslideshow/vacum1.jpg" id="vacum" style="width:100%" height="100%">
						 		</div>
							 <div class="dotcontainer">
								  <span class="vacumdot1" onclick='slideit(-1, "vacum", vacum)'></span> 
								  <span class="vacumdot2" onclick='slideit(1, "vacum", vacum)'></span>
								</div>
						</div>
				</div>
				

				<?php include 'footer.php'; ?>