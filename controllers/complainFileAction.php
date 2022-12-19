 <?php
   

	if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

		 $customerOrderId=$_POST['customerOrderId'];
           $orderDate=$_POST['orderDate'];
           $complainFile=$_POST['complainFile'];

		if (empty($customerOrderId)||empty($orderDate)||empty( $complainFile)) 
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
		


	    function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
   
    
		if ($isValid) 
		{
           $customerOrderId=sanitize($customerOrderId);
           $orderDate=sanitize($orderDate);
           $complainFile=sanitize($complainFile);
            
		}


	

	
		if ($isValid) { 

           include"../model/databaseConnect.php";
           include"../model/dbInsertc.php";


			

	        if ($response) {
		        echo "Complained Succssfully";
	        }
	        else {
		        echo "Error while saving";
	        }

	       $connection->close();
        }
			
	
			
    }

    ?>