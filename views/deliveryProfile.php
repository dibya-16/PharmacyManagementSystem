
<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:deliveryLogout.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Profile</title>
     <link rel="stylesheet"type="text/css"href="css/menustyle.css">
    <style>
        body{
            background-color: RGB(186,186,59);
        }
    </style>
</head>
<?php
       include "header.php";
    ?>
<body>

    <form method="POST">
    <h2>Profile Page:</h2>
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
    <h2>Profile of <?php echo $_SESSION['username'] ?></h2> 
    <br>
        <fieldset>
         <center><h2>Basic Information:</h2></center>
         <p><b>First Name:&nbsp &nbsp <?php echo $_SESSION['firstName'] ?></p>
         <p><b>Last Name:&nbsp &nbsp <?php echo  $_SESSION['lastName'] ?> </p>
          <p><b>Gender:&nbsp &nbsp <?php echo    $_SESSION['gender'] ?></b></p> 
         <p><b>Date of Birth:&nbsp &nbsp<?php echo $_SESSION['dateOfBirth'] ?></b></p>
         <p><b>Religion: &nbsp &nbsp  <?php echo $_SESSION['religion'] ?></b></p>
        
         </fieldset>
         <br>
         <fieldset>
         <center><h2>Contact Information:</h2></center>
         <p><b>Present Address:&nbsp &nbsp<?php echo $_SESSION['presentAddress'] ?></b></p>
         <p><b>Permanent Address: &nbsp &nbsp<?php echo $_SESSION['permanentAddress'] ?></b></p>
        
         <p><b>Phone:&nbsp &nbsp <?php echo $_SESSION['phone'] ?></b></p>
         <p><b>Email:&nbsp &nbsp<?php echo $_SESSION['email'] ?></b></p>
         <p><b>Personal website Link: &nbsp &nbsp <?php echo $_SESSION['personalWebsiteLink'] ?></b></p>

         


        </fieldset>  
        
         <br>

        <p><h3><a href="updateProfile.php"> Click here </a> &nbsp For Update Your Profile</h3></p>


    </form>   
   
</body>
<?php
       include "footer.php";
    ?>
</html>