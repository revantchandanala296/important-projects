<?php
$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpass = 'revant';

$connection=mysqli_connect("$dbhost", "$dbuser", "$dbpass","$dbname") or die(mysql_error());
?>
