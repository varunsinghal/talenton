<?php
if(isset($_POST['email']) && isset($_POST['password'])){
include 'config.php'; 
$user_email = protect($_POST['email']);
$user_pass = md5(protect($_POST['password']));
//number of rows with username and password submitted by user
$query=mysql_query("select user_id from talent_user where user_email='$user_email' and user_pass='$user_pass'");
$rows=mysql_num_rows($query);
if($rows==1){
$result=mysql_fetch_array($query);
session_start();
$_SESSION['user_id']=$result['user_id'];
$user_message = "<script type='text/javascript'>window.location.href = 'home.php'</script>";
}
else{
$user_message = "Wrong Password or Username. ";
}
echo $user_message;
}
?>
