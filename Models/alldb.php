<?php
require_once('db.php');
function auth($id,$pass)
{
	$con=con();
	$sql="select * from car where Id='$id' and Password='$pass'";
	$res=mysqli_query($con,$sql);
	  $r=$res->fetch_assoc();
	  $role=$r['Role'];
	  return $role;
}

function data()
{
	$con=con();
	$sql="select * from allcars";
	$res=mysqli_query($con,$sql);
	return $res;
}


function databooked()
{
	$con=con();
	$sql="select * from booked";
	$res=mysqli_query($con,$sql);
	return $res;
}
function deletebooked($id)
{
	$con=con();
	$sql="Delete from booked where carid='$id'";
	$res=mysqli_query($con,$sql);
	return $res ;
}
function mybooked($carid,$carname, $brandname,$price)
{
	$con=con();
	$sql="Insert into booked values ('$carname','$brandname', '$carid','$price')";
	$res=mysqli_query($con,$sql);
	return $res;
}



function give($id) {
    $con = con();  
    $sql = "select * from allcars where carid='$id'";  
    $res = mysqli_query($con, $sql);
    return $res;
}

?>