<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Complain a file </title>
    <link rel="stylesheet"type="text/css"href="css/menustyle.css">
    <script src="js/complainfile.js"></script>
    <style>
      form{
          background-color: RGB(150,58,2);
          height:450px;
          width:1150px;
          text-align: center;

        }
    </style>


</head>
<?php
       include "header.php";
    ?>

<body>
    
	<h2>Complain File:</h2>
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
     <center><form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST"name="complainfileform"onsubmit="return isValid()">
    	<fieldset>
    		<legend><h2>File a Complain</h2></legend>
		
		<p><b>Order Id:&nbsp &nbsp &nbsp</b> <input type="number" name="customerOrderId"placeholder="Customer Order Id"><span id="customerOrderIdjs" style="color: red;"></span>
		<p><b>Order Date:&nbsp &nbsp &nbsp</b><input type="date" name="orderDate"placeholder="Order Date"><span id="orderDatejs" style="color: red;"></span>
		<br><br>
		  <p><b>Complain about Customer:</b></p>
		 <textarea name="complainFile"></textarea><span id="complainFilejs" style="color: red;"></span><br><br>
		<input type="submit" name="complain" value="submit">
	</fieldset>
	</form></center>


   <?php
          include "../controllers/complainFileAction.php";
       ?>
       

</body>
<?php
       include "footer.php";
    ?>
</html>