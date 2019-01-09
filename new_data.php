<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipart/form-data" method="POST" action="update.php?id1=<?php
$id1 = $_GET['id'];
echo $id1;?>">

	<input type="text" name="u_first" placeholder="First Name" id="u_first" value="<?php
$id1 = $_GET['fname'];
echo $id1;?>"><br>
	<input type="text" name="u_last" placeholder="Last Name" id="u_last" value="<?php
$id1 = $_GET['lname'];
echo $id1;?>"><br>
	<input type="text" name="u_email" placeholder="email" id="u_email" value="<?php
$id1 = $_GET['email'];
echo $id1;?>"><br>
	<input type="password" name="u_pass" placeholder="password" id="u_pass" autocomplete="ok" value="<?php
$id1 = $_GET['pass'];
echo $id1;?>"><br>
	<input type="password" name="u_cpass" placeholder="confirm password" id="u_cpass" autocomplete="okk"
	value="<?php
$id1 = $_GET['cpass'];
echo $id1;?>"><br>
	<input type="file" name="image">

	<input type="submit" name="">
</form>
</body>
</html>