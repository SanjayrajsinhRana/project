<?php
require ('connection.php');
$fname=$_POST['fname'];
$email=$_POST['email'];
$con1= new connection();
$con=$con1->connect();
if (isset($_POST['sign_up']))
{
	if ($fname == NULL || $_POST['lname'] == NULL || $_POST['email'] == NULL || $_POST['pass'] == NULL || $_POST['cpass'] == NULL) 
	{
	header("Location: ../form/sign-up.php?error=101");	
	}
	else
	{

		if ($_POST['pass'] != $_POST['cpass']) 
		{
				
				header("Location: ../form/sign-up.php?error=105");
		}
		else
		{
			if (strlen($_POST['pass']) <8) 
			{
				header("Location: ../form/sign-up.php?error=102");
			}
			elseif (!preg_match("/^[_\.0-9a-zA-Z]+@([0-9a-zA-Z][0-9a-zA-Z]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
			{
				header("Location: ../form/sign-up.php?error=103");
			}
			else
			{
				$sqlc="CREATE TABLE IF NOT EXISTS users (ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,firstname varchar(255),
						lastname varchar(255),email varchar(255),password varchar(255),cpassword varchar(255),date_created varchar(255))";
			/*	if(mysqli_query($con,$sqlc))
				{
					echo "success";
				}
			else
			{
					echo "Error creating table: " . mysqli_error($con);
			}*/
				$lname=$_POST['lname'];
				
				$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];
				$date=date("Y/m/d");

				$iquery="INSERT INTO users (firstname,lastname,email,password,cpassword,date_created) VALUES ('$fname','$lname','$email','$pass','$cpass','$date')";
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