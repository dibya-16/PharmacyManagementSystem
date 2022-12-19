
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
    <title>Update Profile</title>
    <link rel="stylesheet"type="text/css"href="css/menustyle.css">
     <link rel="stylesheet"type="text/css"href="css/bgform.css">
    <script src="js/updateprofile.js"></script>
    <style>
      form{
          
          width:1150px;
          text-align: center;

        }
    </style>
</head>
<?php
       include "header.php";
    ?>
<body>
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

    <center><form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST"name="updateprofileform"onsubmit="return isValid()">
    <h2>Update Profile Page:</h2>
  
    <br> 

    <h2>Profile of <?php echo $_SESSION['username'] ?></h2>

    <br>
        <fieldset>
         <center><h2>Basic Information:</h2></center>

        <p><b>First Name:&nbsp &nbsp &nbsp</b><input type="text"name="firstName"   value=<?php echo $_SESSION['firstName']?>></p><span id="firstNamejs" style="color: red;"></span>

         <p><b>Last Name: &nbsp &nbsp &nbsp</b><input type="text"name="lastName"value=<?php echo  $_SESSION['lastName'] ?>></p></p><span id="lastNamejs" style="color: red;"></span>
         
         <b>Gender:&nbsp &nbsp &nbsp</b>
         <select name="gender"value= <?php echo $_SESSION['gender'] ?>>
             <option>Male</option>
             <option>Female</option>
             <option>Others</option>
         </select></p><span id="genderjs" style="color: red;"></span>  
         
         <p><b>Date of Birth:&nbsp &nbsp &nbsp</b><input type="date"name="dateOfBirth"value=<?php echo $_SESSION['dateOfBirth'] ?>></p><span id="datejs" style="color: red;"></span>  
         <b>Religion:&nbsp &nbsp &nbsp</b>
         <select name="religion"value= <?php echo $_SESSION['religion'] ?>>
             <option>Hindu</option>
             <option>Islam</option>
             <option>Others</option>
         </select></p>  
         </fieldset>
         <br>
         <fieldset>
         <center><h2>Contact Information:</h2></center>
         <p><b>Present Address:</b></p>
         <textarea name="presentAddress"><?php echo $_SESSION['presentAddress'] ?></textarea><span id="presentAddressjs" style="color: red;"></span>  
         <p><b>Permanent Address:</b></p>
         <textarea name="permanentAddress"><?php echo $_SESSION['permanentAddress'] ?></textarea><span id="permanentAddressjs" style="color: red;"></span>
         <p><b>Phone:&nbsp &nbsp &nbsp</b><input type="tel"name="phone"value=<?php echo $_SESSION['phone']?>></p><span id="phonejs" style="color: red;"></span> 

         <p><b>Email:&nbsp &nbsp &nbsp</b><input type="email"name="email"value=<?php echo $_SESSION['email']?>></p><span id="emailjs" style="color: red;"></span> 

         <p><b>Personal website Link:&nbsp &nbsp &nbsp</b><input type="url"name="personalWebsiteLink"value=<?php echo $_SESSION['personalWebsiteLink'] ?>></p><span id="personalWebsiteLinkjs" style="color: red;"></span> 
         


        </fieldset>  
        
         <br>

       <input type="submit"name="update"value="Update">

    </form></center>
    <?php
    include "../controllers/updateProfileAction.php";
    ?>  
   
</body>
<?php
       include "footer.php";
    ?>
</html>