<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Submisiion</title>
</head>
<?php
       include "header.php";
    ?>
<body>


 <?php 

    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    //$gender=$_POST['gender'];
    //$date=$_POST['dateOfBirth'];
    //$religion=$_POST['religion'];
    $presentAddress=$_POST['presentAddress'];
    $permanentAddress=$_POST['permanentAddress'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $personalWebsiteLink=$_POST['personalWebsiteLink'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $submitted=false;
 ?>
 <?php  
		if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

			if (empty($firstName)||empty($lastName)||empty($_POST['gender'])||empty($_POST['dateOfBirth'])||empty($_POST['religion'])||empty($presentAddress)||empty($permanentAddress)||empty($phone)||empty($email)||empty($personalWebsiteLink)||empty($username)||empty($password)||empty($role)) 
			{
				$isValid = false;
				echo "<br>";
				echo "<br>";
				echo"<center>";
				echo"<h2>";
				echo "Please fill up the form properly";
				echo"</center>";
				echo"</h2>";
				echo"<br><br>";
				$submitted=false;
			}
			else {
				$isValid = true;
				echo "<br>";
				echo "<br>";
				echo"<center>";
				echo"<h2>";
				echo "Submitted Successfully";
				echo"</center>";
				echo"</h2>";
				echo"<br><br>";
				
				$submitted=true;
			}
		} 


	?>

	<?php
	    function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
    ?>
    <?php
		if ($isValid) 
		{

			$firstName=sanitize($firstName);
			$lastName=sanitize($lastName);
			
			
			$presentAddress=sanitize($presentAddress);
            $permanentAddress=sanitize($permanentAddress);
            $phone= sanitize($phone);
			$email=sanitize($email);

		    $personalWebsiteLink=sanitize($personalWebsiteLink);
			$username=sanitize($username);
			$password=sanitize($password);
			$role=sanitize($role);
		}


	?>

	<?php
		if ($isValid) { 

			include"../model/databaseConnect.php";
			
			$gender=$_POST['gender'];
            $date=$_POST['dateOfBirth'];
            $religion=$_POST['religion'];

           include"../model/dbInsertr.php";

	        if ($response) {
		        echo "Data Inserted Succssfully";
	        }
	        else {
		        echo "Error while saving";
	        }

	       $connection->close();

		}
		
	?>	
    

	<br><br>

	<center><a href="../views/deliveryRegistration.php"><h2> Register </h2> </a> | <a href="../views/deliveryLogin.php" ><h2>Login</h2> </a></center>

	

</body>

<?php
       include "footer.php";
    ?>
</html>






	
