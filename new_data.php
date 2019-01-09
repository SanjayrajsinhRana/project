<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipart/form-data" method="POST" action="update.php?id1=<?php
echo $_GET['id'];?>">
	<input type="text" name="u_first" placeholder="First Name" id="u_first" value="<?php
echo $_GET['fname'];?>"><br>
	<input type="text" name="u_last" placeholder="Last Name" id="u_last" value="<?php
echo $_GET['lname'];?>"><br>
	<input type="text" name="u_email" placeholder="email" id="u_email" value="<?php
echo $_GET['email'];?>"><br>
	<input type="password" name="u_pass" placeholder="password" id="u_pass" autocomplete="ok" value="<?php
echo $_GET['pass'];?>"><br>
	<input type="password" name="u_cpass" placeholder="confirm password" id="u_cpass" autocomplete="okk"
	value="<?php
echo $_GET['cpass'];?>"><br>
	<input type="file" name="image">
	<input type="submit" name="">
</form>
</body>
</html>