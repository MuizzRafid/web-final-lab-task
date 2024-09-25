<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:../Views/clogin.php");
}
$res=data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body{ background-color: rgb(193,185,136);
         align-items: center ; 
         border: solid;
         margin:150px;
         padding: 40px 400px 40px 400px;}
   </style>
</head>
<body>
 <h1>Home Page: Customer</h1>
 <p >

   Welcome to Car Shop , <?php echo $_SESSION['id'] ?>
 </p>

 <table border="2">
  <tr>
  <th>Car name</th>
  <th>Brand name</th>
  <th>Car Id</th>
  <th>Price</th>
  <th>Options</th>
  </tr>
  <?php while($r=$res->fetch_assoc()) { ?>
  <tr>

    <td><?php echo $r['carname']?></td>
    <td><?php echo $r['brandname']?></td>
    <td><?php echo $r['carid']?></td>
    <td><?php echo $r['price']?></td>
    <form action="../Controllers/chomeController.php" method="get" >
      <td><button name="booked"  value="<?php echo $r['carid']?>" >
Booking
       
      </button>
      </td>

    </form>
  
  </tr>
  <?php } ?>
 </table>
 <?php
if(isset($_SESSION['cud'])){
  echo $_SESSION['cud'];
  unset($_SESSION['cud']);
}
 if(isset($_SESSION['succ'])){
  echo $_SESSION['succ'];
  unset($_SESSION['succ']);
 }?>
 <form action="../Controllers/cloginCheckController.php" method="get">
  <button name="logout">LogOut</button>
 </form>
</body>
</html>