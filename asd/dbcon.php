
<?php
$host = 'localhost';
$user = 'root';
$password = '';


$connect = @mysql_connect( $host, $user, $password ) or die ( "Error: Can not connect to server" );
 mysql_set_charset('utf8', $connect);
mysql_select_db( "epam", $connect ) or die ( "Can not connect to database" );

?>