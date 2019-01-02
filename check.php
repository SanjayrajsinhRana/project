<?php
session_start();
require ('connection.php');
$con1= new connection();
$con=$con1->connect();
$username=$_POST['uname'];
$password=$_POST['pass'];
$email=$_POST['email'];
$query="SELECT firstname FROM users where firstname ='$username' AND email='$email' AND password='$password'";
if($result=mysqli_query($con,$query))
{
	$user= mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
	if($user >= 1)
	{
		$_SESSION['u_id']= $row['firstname'];
		header("Location: ../form/homepage.php?login=ok");	
	}
	else
	{
		header("Location: ../form/login.php?login=error");
	}


}
else
{
	echo "error".mysqli_error($con);
}
?>