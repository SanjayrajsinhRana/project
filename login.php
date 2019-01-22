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
		// header("Location: ../form/homepage.php?login=ok");		
				header("Location: ../product/viewproduct.php?login=ok");		

	}
	else
	{?>
	<div class="log">
<form action="check.php" method="POST">
<input type="text" name="uname" id="u_first" placeholder="Enter Username...">
<input type="text" name="email" id="u_email" placeholder="Enter Email...">
<input type="password" name="pass" id="u_pass" placeholder="Enter Password..."><br>
<button name="btn_log" value="LOGIN" class="btn_log" id="btn_log">
LOG_IN</button>
</form></div>
<?php }
?>
<div class="btn2">
<a href="index.php">
	<button class="btn2">SIGN-UP</button>
</a>
</div>


<script>
	$(document).ready(function() {
            $("#btn_log").click
            (function(event){
				
				var u_first = $('#u_first').val();
				var u_email = $('#u_email').val();
				var u_pass = $('#u_pass').val();
             	$.ajax({
			        url: 'check.php',
			        type: 'POST',
			        data: { fname: u_first,email:u_email,pass:u_pass} ,
			        //contentType: 'application/json; charset=utf-8',
			        success: function (response) {
			            header("Location: ../form/homepage.php?login=ok");
			        },
			        error: function () {
			            alert("error");
			        }
			    }); 
					
            });
         });

</script>



</body>
</html>