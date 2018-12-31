<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN
	</title>
<style type="text/css">
	.log
	{
		border: 2px solid black;
		padding: 20px;
		position: absolute;
		top: 330px;
		left:330px;
	}
	.btn2
	{
		margin-left:283px;
		margin-top: 220px;

	}
	.btn_log
	{	
		height: 21px;
		width: 78px;
		margin-left: 40%;
		margin-top: 12px;
	}
</style>
</head>
<body>
	<?php
	if(isset($_SESSION['u_id']))
	{		
		header("Location: ../form/homepage.php?login=ok");		
	}
	else
	{
		echo '<div class="log">
<form action="check.php" method="POST">
<input type="text" name="uname" placeholder="Enter Username">
<input type="text" name="email" placeholder="Enter Email">
<input type="text" name="pass" placeholder="enter password"><br>
<input type="submit" name="submit" value="LOGIN" class="btn_log">
</form></div>
';
}
?>
<div class="btn2">
<a href="sign-up.php">
	<button class="btn2">SIGN-UP</button>
</a>
</div>
</body>
</html>