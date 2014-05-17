<?php
if(isset($_POST['inputName']) && isset($_POST['inputEmail']) && isset($_POST['inputPassword'])){
include 'config.php';
$name = protect($_POST['inputName']);
$email = protect($_POST['inputEmail']);
$pass = protect($_POST['inputPassword']);
$role = protect($_POST['inputRole']);
$rows=mysql_num_rows(mysql_query("select user_email from talent_user where user_email='$email'"));
if($email=='' or empty($email) or $pass=='' or empty($pass)){
$user_message = "Name, email or password cannot be empty.";
}
else if($rows==0){
//password protection to md5();
$pass = md5($pass);
mysql_query("insert into talent_user (user_name, user_pass, user_email, user_role, user_time) values('$name', '$pass', '$email', '$role', '$time')");
$user_message = "Signup is successful. ";
}
else{
$user_message = "This Email Address already exists. ";
}
echo $user_message;
}
?>
