<?php
session_start();
require ('connection.php');
$username=$_POST['uname'];
$password=$_POST['pass'];
$query="SELECT firstname FROM users where firstname ='$username'";
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