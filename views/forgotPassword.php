
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Forget Password </title>
    <link rel="stylesheet"type="text/css"href="css/bgform.css">
    <script src="js/forgotpass.js"></script>
<style>
      form{
          background-color: RGB(150,58,2);
          height:290px;
          width:700px;
          text-align: center;

        }
    </style>    
</head>
<?php
       include "header.php";
    ?>

<body>

	




  <center><form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST"name="forgotform"onsubmit="return isValid()">
    <h2>Forget Password Page:</h2>
  	<fieldset>
  		<legend><h2>Change Password</h2></legend>
  Previous Email:<input type="text"name="email"Placeholder="Email"><br> <span id="emailjs" style="color: red;"></span>
  <br>

  New Password:<input type="text"name="newPassword"Placeholder="New Password"><br><span id="passwordjs" style="color: red;"></span>
  <br>
  <input type="submit"value="Request For New Password">
</fieldset>
  </form>
  <?php
  include "../controllers/forgotPasswordAction.php";
  ?>
  
    
<br><br>
	
</body>
<?php
       include "footer.php";
    ?>
</html>