<?php
###########################################################################################
			#	  ###		 #	  #  #######  #       #     #
			#	 #   #		 #	  #  #		  #        #   #
			#	#     # 	 ######  #######  #	        ###
			#	#	  #		 #	  #  #		  #	         #
			#	 #	 #		 #	  #	 #		  #	    	 #
			#	  ###   #    #	  #	 #######  ######	 #     
############################################################################################			
			
			
			?>

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
<li><a class = 'link' href="index.php">Kezdőlap</a></li>
<li><a href="index.php?menu=faq">FAQ</a></li>
<li><a href="dbtest.php">DB tests</a></li>

</ul>
</div>
<div id="szoveg">

<?php 
			if(isset($_GET['menu'])){
				if($_GET['menu'] == 'faq'){
					include "faq.php";
				}
				else if($_GET['menu'] == 'dbtest'){
					include "dbtest.php";
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