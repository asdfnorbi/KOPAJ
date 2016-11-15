<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<?php
include_once "dbcon.php";

$sql = "SELECT * FROM termek WHERE termeknev = '".$_GET['menu']."';";
$eredmeny = mysql_query($sql);
while($result = mysql_fetch_array($eredmeny)){
	//echo $result['kategoria']."<br>;
	echo "<br><div style = 'float: left'><br><img src='".$result['kep']."' alt=' ' height='120' width='120' style= 'text-align:top-left'></div>";
	echo "<br><div style= 'float: left, padding-left: -10px'>".$result['termeknev']."<br>";	
	echo "Állapot: Új<br>";
	echo "Raktáron ".$result['raktar']." db<br>";
	echo "Feltöltve 2014. 10. 08.<br>";
	echo "Érvényes: 2014. 12. 01.<br>";	
	echo "Régi ár: ".$result['ar']."<br>";
	echo "Új ár: ".$result['akcios_ar']."<br></div>";
	//ide kell egy gomb
	echo "<div style = 'float: none'>".$result['leiras']."</div>";
	
	
	

}








?>
</html>