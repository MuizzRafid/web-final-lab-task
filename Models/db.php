<?php 

function con()
{
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbname="aaaa";
	$conn=new mysqli($serverName,$userName,$password,$dbname);
	return $conn;
}

?>