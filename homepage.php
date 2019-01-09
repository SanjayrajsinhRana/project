<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<style>
		body{
			background:linear-gradient(#abb2b9,#ccd1d1,#abb2b9);
		}
	</style>
</head>
<body>		
<?php
require ('connection.php');
if(isset($_SESSION['u_id']))
{
//echo "hello" . "  " .$_SESSION['u_id'];
echo "hello" . "  " .$_SESSION['uname'];

?>	
<form action="logout.php" method="POST">
<input type="submit" value="logout">
</form>

<?php
echo "total no.of user is=";
$tno="SELECT ID,firstname,lastname,email,date_created,password,cpassword,picture FROM users";
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
					<?php
		echo "<td align='center'><a href=\"delete.php?id=".$row['ID']."\"><input type='submit' value='delete' name='delete'></a></td>";
		?>

		<?php
		echo "<td align='center'><a href=\"new_data.php?id=".$row['ID']."&fname=".$row['firstname']."&lname=".$row['lastname']."&email=".$row['email']."&pass=".$row['password']."&cpass=".$row['cpassword']."\"><input type='submit' value='UPDATE' name='update'></a></td>";
		?>
		<td>
			<!--<img src="picture/user-<?php //echo'1';?>.jpg">-->
			<!--<img src='./picture/user-<?php //echo $row["ID"];?>'/>-->
			<img src='picture/<?php echo $row["picture"]?>'/>
		</td>
</tr>	
<?php
}
?>

</table>
</body>
</html>