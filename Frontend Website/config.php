<?php
	$connect=mysqli_connect("localhost","root","","db_admin") or die(mysqli_error($connect));
	if($connect)
	{
		echo "Database connection success";
	}
	else
	{
		echo "Database Connection Error";
	}
?>