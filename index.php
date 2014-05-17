<?php
session_start();
ob_start();
if(isset($_SESSION['user_id'])){
header("location: home.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>talentOn</title>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 75z8af3f4ydu4q
  authorize: true
  lang:  es_ES
</script>
 
<script type="text/javascript">
function onLinkedInAuth() {
  IN.API.Profile("me")
    .result( function(me) {
      var id = me.values[0].id;
      // AJAX call to pass back id to your server
    });
}
</script>
</head>
<body>
<div class="container_12">
	<div class="grid_6">
		<h3>Login</h3> 
		<form method="post" id="login">
		Email Address<br/>
		<input type="text" name="email" id="email"><br/>
		Password<br/>
		<input type="password" name="password" id="password"><br/><br/> 
		<input type="submit" value="Log in" name="inputLogin" id="inputLogin"><br/>
		</form> 
		<br/>
		<span id="msg2"></span>
	</div>
	<div class="grid_6">
		<h3>SignUp</h3>  
		<form method="post" id="signup">
		Name<br/>
		<input type="text" name="inputName" id="inputName"><br/>
		Email Address<br/>
		<input type="text" name="inputEmail" id="inputEmail"><br/>
		Password<br/>
		<input type="password" name="inputPassword" id="inputPassword"><br/>
		Role<br/>
		<select name="inputRole" id="inputRole">
			<option value="Employer">Employer</option>
			<option value="Developer">Developer</option>
		</select><br/><br/>
		<input type="submit" value="Sign Up" name="inputSignup" id="inputSignup"><br/>
		</form>
		<br/><span id="msg"></span>
		<br/>OR<br/>
		Developers: LinkedIN  
		<?php
		if (isset($_SESSION['github_data'])) {
		// Redirection to application home page.
		header("location:home.php");
		exit;
		}
		//HTML Code
		echo '<a href="github_login.php">Github</a>';
		?> 
		<script type="IN/Login" data-onAuth="onLinkedInAuth"></script>
		<br/> 
		Employers: LinkedIN Angelist 
		</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>
