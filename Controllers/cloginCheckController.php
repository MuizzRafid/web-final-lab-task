<?php
require_once("../Models/alldb.php");
session_start();

$id=$_POST['id'];
$pass=$_POST['pass'];


if(empty($id||$pass)){
  $_SESSION['error']="please fill up the form";
  header("location:../Views/clogin.php");

}else{
  $status=auth($id,$pass);
  $_SESSION['id']=$id;
  if($status=="admin"){
    header("location:../Views/cadmin.php");
  }else if($status=="customer"){
    header("location:../Views/ccustomer.php");
  }else{
    $_SESSION["error"]="Invalid User";
    header("location:../Views/clogin.php");

  }
}
if(isset($_GET['logout']))
{
	unset($_SESSION['id']);
	header("location:../Views/clogin.php");

}
?>