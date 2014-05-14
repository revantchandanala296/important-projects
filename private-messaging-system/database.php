<?php
$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpass = 'revant';

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
?>
