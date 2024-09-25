<?php
session_start();
require_once('../Models/alldb.php');

if(isset($_GET['booked'])){
  $carid=$_GET['booked'];
  $getAllinfo=give($carid);
  $carname = '';
  $brandname = '';
  $price = 0;

  if ($res = $getAllinfo->fetch_assoc()) {
    
      $carname = $res['carname'];
      $brandname = $res['brandname'];
      $price = $res['price'];
    }
    $status=mybooked($carid,$carname,$brandname,$price);
    if($status){
      header("location:../Views/ccustomer.php");
      $_SESSION["cud"]="";
      $_SESSION['succ']="Inserted";
      
    }else{
      header("location:../Views/ccustomer.php");
      $_SESSION['succ']="Not Inserted";
      
    }

}

if(isset($_GET['Delete'])){
  $id=$_GET['Delete'];
  $res=deletebooked($id);
  if($res){
      $_SESSION['del']="Deleted";
      header("location:../Views/cadmin.php");
  }
}

?>
