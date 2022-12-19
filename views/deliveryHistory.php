<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:deliveryLogout.php");
    }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deilivery History</title>
     <link rel="stylesheet"type="text/css"href="css/menustyle.css">  <style>
        body{
            background-color: RGB(186,186,59);
        }
    </style>          

  </head>
  <?php
       include "header.php";
    ?>
  <body>

    <?php
          include "../controllers/deliveryHistoryAction.php";
       ?>
    
  <h2>History Page:</h2>
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
    <form>
      <h2>History Page</h2>
      <fieldset>
    <center><legend><h1>Delivery History</h1></legend></center>
    <br>
    <?php
    include "../model/databaseConnect.php";
    include "../model/dbReaddhistory.php";

    
    
  
    
    ?>
    <?php
       echo"<center>";
        echo "<table border='1'>";
        echo"<thead>";
        echo"<tr>";
        echo"<th>";
     
        echo"Customer Order Id";
        echo"</th>";
        echo"<th>";
        echo"Customer User Name";
        echo"</th>";
        echo"<th>";
        echo"Medicine Codes";
        echo"</th>";
        echo"<th>";
        echo"Quantities";
        echo"</th>";
        echo"<th>";
        echo"Grand Total";
        echo"</th>";
        echo"<th>";
        echo"Delivery Status";
        echo"</th>";
        echo"<th>";
        echo"Delivered By";
        echo"</th>";

        echo"</tr>";
    
     
        echo"</thead>";
        echo" <tbody>";
 
  
        
           foreach($result as $data) {
           echo "<tr>";
           echo "<td>";
           echo $data['OrderID'];
           echo "</td>";
           echo "<td>";
           echo $data['Username'];
           echo "</td>";
           echo "<td>";
           echo $data['MedicineCodes'];
           echo "</td>";
           echo "<td>";
           echo $data['Quantities'];
           echo "</td>";
           echo "<td>";
           echo $data['GrandTotal'];
           echo "</td>";
            echo "<td>";
           echo  $data['deliveryStatus'];
           echo "</td>";
             echo "<td>";
           echo $_SESSION['username'];
           echo "</td>";
           echo "</tr>";
    
           }
   
       echo" </tbody>";
       echo" </table>";
       echo"</center>";
 
   
    ?>
  </fieldset>
</form>

 
</body>
<?php
       include "footer.php";
    ?>
</html>