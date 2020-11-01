<?php
	$host= "sql209.pony.icu";
	$user= "p0ny_26646228";
	$password= "careerhub2020";
	$database= "p0ny_26646228_Database1";
	
	$connect= mysqli_connect($host,$user,$password,$database);
	
	if(!$connect){
		echo "unable to connect to the server";
	}
	
?>