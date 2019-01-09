<?php
session_start();
require ('connection.php');
$con1 =new connection();
$con=$con1->connect();
$var1=$_GET['id1'];
$var2=$_POST['u_first'];
$var3=$_POST['u_last'];
$var4=$_POST['u_email'];
$var5=$_POST['u_pass'];
$var6=$_POST['u_cpass'];
$target = "picture/".basename("user-".$var1);
	$picture = $_FILES['image']['name'];
$move = move_uploaded_file($_FILES['image']['tmp_name'],$target);

$query="UPDATE users SET firstname='$var2',lastname='$var3',email='$var4',password='$var5',cpassword='$var6' where ID='$var1'";

if(mysqli_query($con,$query))
{
	header("Location: ../form/homepage.php?update=DONE");
}
else
{
	echo "not  done" .mysqli_error($con);
}
?>