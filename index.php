<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>

<title> OLIMPIA </title>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">

</head>
<body>
<div id="header">
<img src="logo.png" alt="Mountain View"  "text-align:center" id="logo">

</div>

<div id="menu">
<ul>
<li><a href="index.html">Kezdőlap</a></li>
<li><a href="stadion.html">Stadionról</a></li>
<li><a href="jatekos.html">Legjobb játékos</a></li>

</ul>
</div>
<div id="szoveg">

<?php 
			if(isset($_GET['menu'])){
				if($_GET['menu'] == 'pizzak'){
					include "pizzak.php";
				}
				else if($_GET['menu'] == 'hamburger'){
					include "hamburger.php";
				}
				else if($_GET['menu'] == 'kosar'){
					include "kosar.php";
				}
				else if($_GET['menu'] == 'contact'	){
					include 'contact.php';
				}
			}else{
				include 'fooldal.php';
			}
		?>	



</div>
<div id="lablec">
Olimpia
</div>
<body background="back.jpeg" id="back">
</body>
</html>