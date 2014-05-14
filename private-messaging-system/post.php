<?php
session_start();
include_once 'database.php';
if(isset($_POST['user'],$_POST['pass']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];

$query = "SELECT id,username from users WHERE username='$user' AND password='$pass'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result)){
$_SESSION['id']=$row['id']; //storing id in session variable
$_SESSION['user']=$user;	//storing username in session variable   
}


echo "Welcome $user,<a href='index.php'>Click here</a>";

}
else{
die("Please fill both the fields");
}
?>
