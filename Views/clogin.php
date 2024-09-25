<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>

	<title>Log</title>
   <style>
      body{ background-color: rgb(193,185,136);
         align-items: center ; 
         border: 10px  solid gray;
         margin:150px;
         padding: 40px 400px 40px 400px;}
        
   </style>
</head>
<body>
	<h1>Login page</h1>
    
    <form method="post" action="../Controllers/cloginCheckController.php">    
    	ID: <input type="text" name="id"><br>
       pass: <input type="password" name="pass"><br>
       <?php
       if(isset( $_SESSION['error'])) 
       {
       	echo $_SESSION['error']; 
       	unset($_SESSION['error']);
       }
       ?>
        <button>Login</button>
   </form>

</body>
</html>