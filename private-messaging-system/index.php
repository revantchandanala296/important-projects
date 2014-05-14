<?php
session_start();
include_once 'database.php';

date_default_timezone_set('America/New_York');
$dated =date('m/d/Y h:i:s a', time());

include_once 'includes.php';

//sending messages to a particular person.
if(isset($_POST['to'],$_POST['subject'],$_POST['myTextArea'])){
$to=$_POST['to'];
$subject=$_POST['subject'];
$myTextArea=$_POST['myTextArea'];

$query = "SELECT id,username FROM users WHERE username='$to' LIMIT 1";
$result=mysql_query($query) or die(mysql_error());

while($row=mysql_fetch_array($result)){
$toid=$row['id'];
$toUsername=$row['username'];
}


$query="INSERT INTO inbox VALUES(NULL,'$toid','$toUsername','$id','$username','$subject','$myTextArea','0','$dated')";
$result=mysql_query($query) or die(mysql_error());
}

else{
if(isset($_POST['reply'])){
$reply=$_POST['reply'];

$query="INSERT INTO inbox VALUES(NULL,'$fromid','$fromUsername','$id','$username','$unread','$reply','0','$dated')";
$result=mysql_query($query) or die(mysql_error());

}


}


?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="../project/css/style.css" />
<!---<link rel="stylesheet" href="../pms/css/popup.css" />-->
</head>

<body onload="iFrameOn()">
<?php include_once 'popup.php'; ?>

<div id="rightContainer">
<h3>Welcome <?php echo $username;?> !</h3>
<div><button id="button" onclick="openPopup()"> new message</button></div>
<p id="insertText"></p>
<div id="textarea">
<form action="index.php" method="post">
<textarea name="reply" id="reply" rows="15" cols="120"></textarea>
<input type="submit" value="reply" />
</form>
</div>

<div id="logout">
<a href="logout.php" ><input type="submit" value="LogOut"></a>
</div>
</div>

<div id="leftContainer">
<div id="inbox">
<p id="new">New&nbsp&nbsp<?php if($newMessages>0){echo "(<b>".$newMessages."</b>)";} else{echo $newMessages;}?></p>
<p id="total">Total&nbsp&nbsp<?php echo $totalMessages;?></p>
</div>
<div id="messageDisplay">
<p>
<?php
$query = "SELECT * FROM inbox WHERE userid='$id' ORDER by id DESC";
$result=mysql_query($query) or die(mysql_error());
$count=mysql_num_rows($result);
while($rows=mysql_fetch_array($result)){
if($rows['viewed']==0){
echo "<h2><p id='subject' style='text-decoration:underline;color: blue;' onclick='change();'>".$rows['subject']."</p></h2>";
echo "<h3>".$rows['fromuser']."</h3>";
}
else if($rows['viewed']==1){
echo "<h2><p id='subject' style='text-decoration:underline;color: blue;' onclick='change();'>".$rows['subject']."</p></h2>";
echo "<h3>".$rows['fromuser']."</h3>";
}
}
?>
</p>
</div>
</div>


<!--end of textarea code-->
<script src="../project/js/jquery-1.10.2.min.js"></script>
<script src="../project/js/popup.js"></script>
<script src="../project/js/load.js"></script>
</body>
</html>
