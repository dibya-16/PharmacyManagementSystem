

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Delivery Login </title>
    <link rel="stylesheet"type="text/css"href="css/bgform.css">
    <script src="js/login.js"></script>
    <style>
    	form{
   	    	background-color: RGB(150,58,2);
   	    	height:310px;
   	    	width:400px;
   	    	text-align: center;

   	    }
    </style>

</head>
<?php
       include "header.php";
    ?>

<body>
  
	
 	<center><form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST"name="loginform"onsubmit="return isValid()">
 		 <fieldset>
 		 	<legend><h2>Login Form</h2></legend>
		UserName: <input type="text" name="username"placeholder="Username"value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><span id="usernamejs" style="color: red;"></span>
		<br><br>
		Password: <input type="password" name="password"placeholder="Password"value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><span id="passwordjs" style="color: red;"></span>
		<br><br>
		<input type="checkbox" name="remember" value="remember"> &nbsp; Remeber Me<br>
		<input type="submit" name="login" value="Login"><br>
		
		 <h3>forgotten password? <a href="forgotPassword.php"> Click here </a> for create new password</h3>

	    
		 </fieldset>
	</form></center>
	<?php
	include "../controllers/deliveryLoginAction.php";
	?>
	<br><br>
	<center><h3>Not registered yet? <a href="deliveryRegistration.php"> Click here </a> for registration.</h3></center>
	






   


	

</body>
<?php
       include "footer.php";
    ?>
</html>