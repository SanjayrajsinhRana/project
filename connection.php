<?php
class connection 
{
	function connect()
	{
		$dbserver ="localhost";
		$dbuser ="root";
		$dbname="project";
		$dbpass="";
		$conn =mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
		if ($conn == false) 
			{
				echo "connection failed".mysqli_error($conn);
			}
		else
			{}
		return $conn;
	}
}
?>