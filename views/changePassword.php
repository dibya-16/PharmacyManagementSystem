<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:deliveryLogout.php");
    }
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Change Password </title>
   
     <link rel="stylesheet"type="text/css"href="css/menustyle.css">
     <link rel="stylesheet"type="text/css"href="css/bgform.css">
     <style>
      form{
          background-color: RGB(150,58,2);
          height:290px;
          width:1150px;
          text-align: center;

        }
    </style>           

</head>
 <?php
       include "header.php";
    ?>
<body>
	<h2>Reset Password Page:</h2>

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

	


  <center><form action="../controllers/changePasswordAction.php"id="cp" method="POST"name="changepassform"onsubmit="sendData(this);return false;">
  	<fieldset>
  		<legend><h2>Change Password</h2></legend>
  Previous Password:<input type="text"name="previousPassword"Placeholder="Previous Password">
  <br>
 <br>
  New Password:<input type="text"name="newPassword"Placeholder="New Password"><br>
  <br>
  <input type="submit"value="Submit">
</fieldset>
  </form>
  <p id="msg"></p>
</center>

  
   
    
<br><br>
<script>
    function sendData(formData) {
      
      if (formData.previousPassword.value === "" || formData.newPassword.value === "") {
        document.getElementById("msg").innerHTML = "Please fill up the form properly";
      }

      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("msg").innerHTML = this.responseText;
        }
      }
      xhttp.open(formData.method, formData.action);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      const myData = {
        "previousPassword" : formData.previousPassword.value,
        "newPassword" : formData.newPassword.value
        
      }
      xhttp.send("obj="+JSON.stringify(myData));

      document.getElementById("cp").reset();
    }
  </script>
	
</body>
<?php
       include "footer.php";
    ?>
</html>