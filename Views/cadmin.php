<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:../Views/clogin.php");
}
$res=databooked();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link rel="stylesheet" href="admin.css">
<body>
  <div class="containeradmin">


  <h1 class="heading">Admin Page</h1>
  Welcome, <?php echo $_SESSION['id'] ?>
  

  <table border="1">
    <tr>
       <th>Car Name</th>
       <th>Brand Name</th>
       <th>Car Id</th>
       <th>Price</th> 
       <th>Options</th> 
    </tr>
    <?php while($r=$res->fetch_assoc()) { ?>
    <tr>
       <td><?php echo $r['carname'] ?></td>
       <td><?php echo $r['brandname'] ?></td>
       <td><?php echo $r['carid'] ?></td>
       <td><?php echo $r['price']?></td>


       
      
       <form action="../Controllers/homeController.php" >
       <td><button name="Delete" value="<?php echo $r['carid'] ?>">Delete</button></td>
      
       </form>
    </tr>
 <?php }?>
 
 </table>
 


<form action="../Controllers/cloginCheckController.php">
 <button name="logout">Logout</button>
</form>
</div>
</body>
</html>