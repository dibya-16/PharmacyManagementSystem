<?php
  session_start();
   if (count($_SESSION)===0)
   {
     header("Location:deliveryLogout.php");
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet"type="text/css"href="css/menustyle.css">
    <link rel="stylesheet"type="text/css"href="css/bgform.css">            
</head>
<?php
       include "header.php";
    ?>
<body>
<h2>Home Page:</h2>
 <div id="nav-menu">
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="deliveryProfile.php">Profile</a></li>
    <li><a href="changePassword.php">Change Password</a></li>
    <li><a href="deliveryList.php">Delivery List</a></li>
    <li><a href="complainFile.php">Complain File</a></li>
    <li><a href="deliveryHistory.php">Delivery History</a></li>
    <li><a href="deliveryLogout.php">Logout</a></li>
  </ul>
 </div>
    <br>

   <center><h2>Welcome</h2></center>
   <?php
   echo "<center>";
   echo "<p>";
   echo "<h3>";
   echo $_SESSION['username'] ;
   echo "</h3>";
   echo"</p>";
   echo "</center>";
   

   ?>
</body>
<?php
       include "footer.php";
    ?>
</html>