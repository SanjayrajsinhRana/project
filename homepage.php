<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body bgcolor="lightgreen">		
<?php
require ('connection.php');
if(isset($_SESSION['u_id']))
{
echo "hello" . "  " .$_SESSION['u_id'];
?>	<form action="logout.php" method="POST">
		<input type="submit" value="logout">
		</form>
		<?php
echo "total no.of user is=";
$tno="SELECT firstname,lastname,email,date_created FROM users";
$con1= new connection();
$con=$con1->connect();
$tno2=mysqli_query($con,$tno);
$rowcount=mysqli_num_rows($tno2);
echo $rowcount;
;
}
else
{	
	header("Location: ../form/login.php?login=error");
}
?>
<table border="2px solid black">
	<tr>
		<td><b>FirstName</b></td>
		<td><b>LastName</b></td>
		<td><b>Email</b></td>
		<td><b>Date_Created</b></td>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($tno2))
{
?>

		<td>
			<?php
				echo $row["firstname"];
			?>
		</td>
		<td>
			<?php
				echo $row["lastname"];
			?>
		</td>
		<td>
			<?php
				echo $row["email"];
			?>
		</td>

		<td>
			<?php
				echo $row["date_created"];
			?>
		</td>
</tr>	
<?php
}
?>

</table>
</body>
</html>