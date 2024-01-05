<?php
	$host = "belajarcrud.test";
	$username = "";
	$password = "";
	$database = "tbl_karyawan";

	$query = mysqli_connect($host,$username,$password,$database);
	if(!$query)
	{
		die();
	}	
?>



