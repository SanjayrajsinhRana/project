<!DOCTYPE html>
<html>
<head>
	<title>SIGN-UP</title>

<style type="text/css">
.sign_up
{
	position: absolute;
	margin-left: 500px;
	margin-top: 250px;
	border:2px solid gray;
	padding: 3px;
	background-color: lightgray;
}
</style>
</head>
<body bgcolor="lightblue">
<div class="sign_up">
<?php 	
		if(isset($_GET['error']) && $_GET['error'] == 101)
		{
			echo "Please fill all information.";
		}
		if(isset($_GET['error']) && $_GET['error'] == 102)
		{
			echo "pass word length is too short must be of length 8";
		}
		if(isset($_GET['error']) && $_GET['error'] == 103)
		{
			echo "enter email in proper format";
		}
		if(isset($_GET['error']) && $_GET['error'] == 105)
		{
			echo "Password And ConfirmPassword must be same.";
		}
?>
<form action="datamgt.php" method="POST" id="sign_up">
<input type="text" name="fname" placeholder="First Name" id="u_first"><br>
<input type="text" name="lname" placeholder="Last Name" id="u_last"><br>
<input type="text" name="email" placeholder="email" id="u_email"><br>
<input type="password" name="pass" placeholder="password" id="u_pass"><br>
<input type="password" name="cpass" placeholder="confirm password" id="u_cpass"><br>
<!--- <input type="submit" name="submit" value="SIGN-UP">
-->



<button type="submit" value="SIGN-UP" id="sign_up" name="sign_up" onclick="return validate()">SIGNUP</button>
</form>
</div>
<script type="text/javascript">
	function validate()
	{
		var u_f=document.getElementById('u_first').value;
		var u_l=document.getElementById('u_last').value;
		var u_e=document.getElementById('u_email').value;
		var u_p=document.getElementById('u_pass').value;
		var u_cp=document.getElementById('u_cpass').value;
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 
		if (u_f == "" || u_l== "" || u_e=="" || u_p=="" || u_cp=="") 
		{
			window.alert("enter all info");
			return false;
		}
		else if(u_p.length < 8)
		{
			window.alert("password must be of size 8");
			return false;
		}
		else if(u_p != u_cp)
		{
			window.alert("password and confirm password must be same");
			return false;
		}
		else if(!re.test(u_e))
		{
			window.alert("email must be in proper format");
			return false;
		}
		else
		{
			//document.getElementById('sign_up').submit();
			return true;
		}
	}
</script>
</body>
</html>