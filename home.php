<?php
session_start();
ob_start();
if(!isset($_SESSION['user_id'])){
header("location: index.php");
exit;
}

include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>talentOn | Home</title>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
</head>
<body>
<h1>Welcome</h1>
<?php
$user = mysql_fetch_array(mysql_query("select * from talent_user where user_id='$_SESSION[user_id]'"));
?>
<div class="container_12">
	<div class="grid_6">
		<?php 
		echo 'Name : '.$user['user_name'].'<br/>';
		echo 'Email : '.$user['user_email'].'<br/>';
		echo 'Role : '.$user['user_role'].'<br/>';
		echo 'Registered : '.timec($user['user_time']).'<br/>';
		?>
	</div>
	<div class="grid_6">
	<a href="logout.php">Logout</a>
	</div>
