<?php
session_start();
require ('connection.php');
$con1 =new connection();
$con=$con1->connect();
$var1=$_GET['id'];
$var_active=$_SESSION['u_id'];
if ($var1 == $var_active) {
	header("Location: ../form/homepage.php?DELETE=FAILED");
}
else
{
			
		$query = "DELETE FROM users WHERE ID='$var1'";
		if(mysqli_query($con,$query))
		{
			header("Location: ../form/homepage.php?DELETE=SUCCESS");
		}
		else
		{
			echo mysqli_error($con);
		}

}
?>