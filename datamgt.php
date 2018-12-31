<?php
require ('connection.php');
$fname=$_POST['fname'];

if (isset($_POST['submit']))
{
	if ($fname == NULL || $_POST['lname'] == NULL || $_POST['email'] == NULL || $_POST['pass'] == NULL || $_POST['cpass'] == NULL) 
	{
	echo "Please enter all information";	
	}
	else
	{

		if ($_POST['pass'] != $_POST['cpass']) 
		{
				echo "password and confirm password most be same";
		}
		else
		{
			if (strlen($_POST['pass']) <8) 
			{
				echo "pass word length is too short";
			}
			else
			{
				$sqlc="CREATE TABLE IF NOT EXISTS users (ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,firstname varchar(255),
						lastname varchar(255),email varchar(255),password varchar(255),cpassword varchar(255))";
			/*	if(mysqli_query($con,$sqlc))
				{
					echo "success";
				}
			else
			{
					echo "Error creating table: " . mysqli_error($con);
			}*/
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];

				$iquery="INSERT INTO users (firstname,lastname,email,password,cpassword) VALUES ('$fname','$lname','$email','$pass','$cpass')";
				mysqli_query($con,$iquery);
				header("Location: ../form/login.php?signup=ok");
			}		
		}



	}
}
else
{
	echo "connection failed".mysqli_error($con);
}
?>