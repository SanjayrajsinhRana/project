<?php
$dbserver ="localhost";
$dbuser ="root";
$dbname="project";
$dbpass="";
$con =mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
if ($con == false) 
{
	echo "connection failed".mysqli_error($con);
}
else
{
	
}
?>