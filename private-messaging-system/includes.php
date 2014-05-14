<?php
$query = "SELECT id,username from users WHERE username='" .$_SESSION['user']."'" ;
$result=mysql_query($query);
while($row=mysql_fetch_array($result)){
$id=$row['id']; 
$username=$row['username'];
}

//check for new messages

$query = "SELECT COUNT(id) AS total FROM inbox WHERE userid='$id' AND viewed='0'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($result);
$newMessages=$row['total'];

//check for all messages in inbox
$query = "SELECT COUNT(id) AS total FROM inbox WHERE userid='$id'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($result);
$totalMessages=$row['total'];


//show messages inside inbox bold
$query = "SELECT * FROM inbox WHERE userid='$id' ORDER by id DESC";
$result=mysql_query($query) or die(mysql_error());
$count=mysql_num_rows($result);
while($rows=mysql_fetch_array($result)){
if($rows['viewed']==0){
$unread=$rows['subject']; 
$fromUsername=$rows['fromuser'];
$fromid=$rows['fromid'];
}
else if($rows['viewed']==1){
$unread=$rows['subject']; 
$fromUsername=$rows['fromuser'];
$fromid=$rows['fromid'];
}
}
?>
