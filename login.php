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
		border: 2px dotted black;
		border-radius: 20px;
		padding: 20px;
		position: absolute;
		top: 290px;
		left:330px;
	}
	.btn2
	{
		margin-left:284.5px;
		margin-top: 206px;
		border-radius: 50px;
		border-color: gray;

	}
	.btn_log
	{	
		height: 28px;
		width: 85px;
		margin-left: 39.5%;
		margin-top: 12px;
		border-radius: 50px;
		border-color: gray;
	}
</style>
</head>
<body bgcolor="lightgray">
	<?php
	if(isset($_SESSION['u_id']))
	{		
		header("Location: ../form/homepage.php?login=ok");		
	}
	else
	{?>
	<div class="log">
<form action="check.php" method="POST">
<input type="text" name="uname" placeholder="Enter Username...">
<input type="text" name="email" placeholder="Enter Email...">
<input type="password" name="pass" placeholder="Enter Password..."><br>
<input type="submit" name="submit" value="LOGIN" class="btn_log">
</form></div>
<?php }
?>
<div class="btn2">
<a href="sign-up.php">
	<button class="btn2">SIGN-UP</button>
</a>
</div>
</body>
</html>