<!DOCTYPE html>
<html>
<head>
	<title>SIGN-UP</title>

<style type="text/css">
.sign_up
{
margin-top: 5%;
height: 550px;
width: 30%;
}
	body{
			background:linear-gradient(#68829E,#66A5AD,#68829E);
		}
input
{
			width: 80%;
			height: 50px;
			margin-left: 9%;
			margin-top: 2%;
			border: 0px;
			border-radius:5px;
			padding-left: 2%;
}
.btn_signup
{
	width: 80%;
	margin-top: 2%;
	margin-left: 9%;
	border-radius: 15px;
	height: 50px;

}
</style>
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> 
<script src="./assets/jquery.js"></script>
<script src="./assets/jquery.validate.js"></script> -->
<script src="../form/assets/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../form/assets/jquery.js"></script>

</head>
<body bgcolor="lightblue">
	<center>
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
<div class="errorMsg"> 
 <p id="er_msg_js" class="message"></p>
    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
  </div>
<h1 style="color: white; font-family: sans-serif;">SIGN-UP</h1>
<form method="POST" id="up_check">
<input type="text" name="u_first" placeholder="Enter First Name" id="u_first"><br>
<input type="text" name="u_last" placeholder="Enter Last Name" id="u_last"><br>
<input type="text" name="u_email" placeholder="Enter E-mail" id="u_email"><br>
<input type="password" name="u_pass" placeholder="Enter Password" id="u_pass" autocomplete="ok"><br>
<input type="password" name="u_cpass" placeholder="Confirm Password" id="u_cpass" autocomplete="okk"><br>
<!--- <input type="submit" name="submit" value="SIGN-UP">
-->



<button type="button" value="SIGN-UP" id="sign_up" class="btn_signup" name="sign_up">SIGNUP</button>
</form>
<a href="login.php"><button class="btn_signup">Log-In</button></a>
<script>
    $(document).ready(function(){
    $("#sign_up").click(function(event){
      			var u_first = $('#u_first').val();
				var u_last = $('#u_last').val();
				var u_email = $('#u_email').val();
				var u_pass = $('#u_pass').val();
				var u_cpass = $('#u_cpass').val();
      $.ajax({
        url: 'datamgt.php',
        type: 'POST',
        data: {sign_up : "sign_up",u_first : u_first, u_last : u_last, u_email : u_email, u_pass :u_pass, u_cpass: u_cpass},
        success: function(response)
        {
          if(response == "success")
          {
           // window.location.replace = "login.php";
          //  window.location.href = "login.php";
            document.location.replace('login.php');
          }
          else
          {
            $('#er_msg_js').html(response);
          }
        }
      });
    });
  });
  </script>


<!--<script>
	
$().ready(function()
{
	$("#up_check").validate(
	{
	rules:
	{
		u_first:
		{
			required:true,
			minlength:2
		},

		u_last:
		{
			required:true,
			minlength:2
		},

		u_email:
		{
			required:true,
			minlength:5
		},
	},
		messages:
		{
			u_first:
			{
				required:"it's required",
				minlength:"length must be greater than 2"
			},

			u_last:
			{
				required:"it's required",
				minlength:"length must be  greater than 2"
			},

			u_email:
			{
				required:"it's required",
				minlength:"length must be greater than 5"
			},
		}


});
});


</script>-->
</div>
<!--<script type="text/javascript">
	function validate1()
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
</script>-->
</center>
</body>
</html>