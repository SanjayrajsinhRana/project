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
//$p_name = "user-".$var1;
//$target = "picture/".basename("user-".$var1);
$target = "picture/".basename($_FILES['image']['name']);
	$p_name = $_FILES['image']['name'];
	if ($p_name == null) {

header("Location: ../form/homepage.php?update=FAILED");
}

else
{
	$move = move_uploaded_file($_FILES['image']['tmp_name'],$target);
	$query="UPDATE users SET firstname='$var2',lastname='$var3',email='$var4',password='$var5',cpassword='$var6',picture='$p_name' where ID='$var1'";
if (mysqli_query($con,$query) )
{
	header("Location: ../form/homepage.php?update=DONE");

}
else
{
	header("Location: ../form/homepage.php?update=FAILED");
}
}


/*if (mysqli_query($con,$query) )
{
	header("Location: ../form/homepage.php?update=DONE");

}
else
{
	header("Location: ../form/homepage.php?update=FAILED");
}*/
?>