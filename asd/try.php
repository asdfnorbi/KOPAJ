<?php
echo "asd";
include_once "dbcon.php";


$sql = "SELECT * from termek";
$eredmeny = mysql_query ( $sql);
echo $eredmeny;
while($result = mysql_fetch_array($eredmeny)){
echo $result['termeknev']."<br>";

}










?>