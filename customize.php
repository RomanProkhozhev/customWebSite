<?php
	session_start();
	if(!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
		header("Location: login.php");
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kellot Oy</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class = "pageBackground">

	<div class="itemList"><form action="tallenna.php" method="POST">
		<label for="headerColor">Header Color:</label>
		<input type="color" name="headerColor" value="#ff0000" id="headerColor">
		<br>
		<label for="itemListColor">Taustaväri 1:</label>
		<input type="color" name="parColor" value="#ff0000" id="itemListColor">
		<br>
		<label for="bodyColor">Taustaväri 2:</label>
		<input type="color" name="bColor" value="#ff0000" id="bodyColorID">

		<button type="submit" name="submit"> Tallenna </button>
	</form>
	<div class = "preHeader"> 
		<a href="info.html">Info</a>
		&nbsp;
		<a href="contactUs.html">Ota Yhteyttä</a>
	</div>
	
	<ul class ="header">
		<a href="index.html"><div class ="navName"> Kellot Oy </div></a>
		<li><a href="customize.html">Asetukset</a></li>
		<li class="dropdown">
			<a href="assortment.html" class="dropbtn">Valikoima</a>
			<div class="dropdown-content">
				<a href="handWatch.html">Rannekellot</a>
				<a href="bigWatch.html">Isot kellot</a>
				<a href="luxWatch.html">Luksuskellot</a>
			</div>
			<li><a href="aboutUs.html">Meistä</a></li>
			<li><a href="index.html">Kotisuvu</a></li>
		</li>
	</ul>
	<div class="image">
		<img src="css/content/main.jpg" alt="main Image" width="1100" height="400">
		<div class="mainSloganOnImg">Valikoituja valikoimia</div>
		<div class="txtUnderMainSloganOnImg">*Slogan on generoitu aalho.fi sivulla </div>
		<a href="assortment.html"><div class="readMore">LUE LISÄÄ</div></a>
	</div>

	<h2>Tervetuloa verkkokauppaan!</h2>
	<h3>Meillä on tietenkin paras valikoima</h3> 
	<h4>Tutustu:</h4>
	<div class = "polaroidContainer">
		<a href="bigWatch.html"><div class ="polaroid">
			<img src="css/content/item1.jpg" alt="item1" style="width:100%">
			<div class="polaroidText">Antikvaariset Kellot</div></a>
		</div>
		<a href="handWatch.html"><div class ="polaroid">
			<img src="css/content/item2.jpg" alt="item2" style="width:100%">
			<div class="polaroidText">Moderni Kellot</div></a>
		</div>
		<a href="bigWatch.html"><div class ="polaroid">
			<img src="css/content/item3.jpg" alt="item3" style="width:100%">
			<div class="polaroidText">Seinäkellot</div></a>
		</div>
	</div>
	<div class = "polaroidContainer">
		<a href="bigWatch.html"><div class ="polaroid">
			<img src="css/content/item4.jpg" alt="item4" style="width:100%">
			<div class="polaroidText">Lattiakellot</div></a>
		</div>
		<a href="handWatch.html"><div class ="polaroid">
			<img src="css/content/item5.png" alt="item5" style="width:100%">
			<div class="polaroidText">Vintage-rannekellot</div></a>
		</div>
		<a href="handWatch.html"><div class ="polaroid">
			<img src="css/content/item6.jpg" alt="item6" style="width:100%">
			<div class="polaroidText">Urheilukellot</div></a>
		</div>
	</div>
	<div class = "polaroidContainer">
		<a href="luxWatch.html"><div class ="polaroid">
			<img src="css/content/item7.jpg" alt="item7" style="width:100%">
			<div class="polaroidText">Rolex Kellot</div></a>
		</div>
		<a href="luxWatch.html"><div class ="polaroid">
			<img src="css/content/item8.jpg" alt="item8" style="width:100%">
			<div class="polaroidText">Timanttiset Kellot</div></a>
		</div>
		<a href="handWatch.html"><div class ="polaroid">
			<img src="css/content/item9.jpg" alt="item9" style="width:100%">
			<div class="polaroidText">Klassiset Kellot</div></a>
		</div>
	</div>
	<div class="pagesNav">
		<a href="#">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
		<a href="#">6</a>
	</div>
	<div class="footer">
		<div class = footerTxtLeft>
			<h2>Navigointi</h2>
			<a href="index.html"> Kotisivu </a>
			<br>
			<br>
			<a href="aboutUs.html">Meistä</a>
			<br>
			<br>
			<a href="assortment.html">Valikoima</a>
			<br>
			<br>
			<a href="info.html">Info</a>
			<br>
			<br>
			<a href="contactUs.html">Ota yhteyttä</a>
		</div>
		<div class = "footerTxtRight">
			<h2>Seuraa meitä</h2>
			<a href="https://twitter.com/"> Twitter </a>
			<br>
			<br>
			<a href="https://www.instagram.com/">Instagram</a>
			<br>
			<br>
			<a href="https://www.youtube.com/">YouTube</a>
			<br>
			<br>
			<a href="https://www.facebook.com/">Facebook</a>
			<br>
			<br>
			<a href="https://www.pinterest.com/">Pinterest</a>
		</div>
	</div>
	<div class="afterFooter">Copyright©. All Rights Reserved. Made by Roman,Malik & Vera</div>
</div>
<script type="text/javascript" src="script.php"></script>

</body>
</html>
