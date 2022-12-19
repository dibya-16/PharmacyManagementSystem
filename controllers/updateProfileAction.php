

 
 <?php  
		if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {
			$isValid = false;
			$submitted=false;
			

			if (empty($_POST['firstName'])||empty($_POST['lastName'])||empty($_POST['gender'])||empty($_POST['dateOfBirth'])||empty($_POST['religion'])||empty($_POST['presentAddress'])||empty($_POST['permanentAddress'])||empty($_POST['phone'])||empty($_POST['email'])||empty($_POST['personalWebsiteLink'])) 
			{
				$isValid = false;
				
				
				
				$submitted=false;
			}
			else {
				$isValid = true;
				
				
				
				$submitted=true;
			}
		


	

	

	
		if ($isValid) { 

			include"../model/databaseConnect.php";
			
			   
                 $_SESSION['firstName']= $_POST['firstName'];
                 $_SESSION['lastName']=$_POST['lastName'];
                 $_SESSION['gender']= $_POST['gender'];
                 $_SESSION['dateOfBirth']= $_POST['dateOfBirth'];
                 $_SESSION['religion']=$_POST['religion'];
                 $_SESSION['presentAddress']=$_POST['presentAddress'];
                 $_SESSION['permanentAddress']=$_POST['permanentAddress'];
                 $_SESSION['phone']=$_POST['phone'];
                 $_SESSION['email']=$_POST['email'];
                 $_SESSION['personalWebsiteLink']=$_POST['personalWebsiteLink'];

            $sql = "UPDATE deliverymaninfo SET firstName = ?,lastName= ?,gender= ?,dateOfBirth= ?,religion= ?,presentAddress= ?,permanentAddress=?,phone= ?,email= ?,personalWebsiteLink= ? WHERE username = ?";

            $stmt = $connection->prepare($sql);
	        $stmt->bind_param("sssssssssss",  $_SESSION['firstName'],$_SESSION['lastName'],$_SESSION['gender'], $_SESSION['dateOfBirth'],$_SESSION['religion'],$_SESSION['presentAddress'],$_SESSION['permanentAddress'], $_SESSION['phone'],$_SESSION['email'],$_SESSION['personalWebsiteLink'],$_SESSION['username']);


	             

	        $response = $stmt->execute();

	        if ($response) {
	        
		       
		        header("location:../views/deliveryProfile.php");
	        }
	        else{
	        	echo"Error while update";
	        }
	        
	      
		}
      }
		
	?>	
    

	
	








	
