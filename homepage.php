<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>		
<?php
if(isset($_SESSION['u_id']))
{
echo "hello" .$_SESSION['u_id'];
echo '	<form action="logout.php" method="POST">
		<input type="submit" value="logout">
		</form>';
}
else
{	
	header("Location: ../form/login.php?login=error");
}
?>
</body>
</html>