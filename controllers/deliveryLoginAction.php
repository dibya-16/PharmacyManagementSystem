   <?php
     

		if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0)
		{

			include"../model/databaseConnect.php";
            

           
	        $username=$_POST['username'];
            $password=$_POST['password'];
            include"../model/dbLoginr.php";
	       

	        if ($response){
		          $data = $stmt->get_result();
   
		      if ($data->num_rows > 0) {


		      	session_start();
		      	
                
              
                 
                          
                 foreach($data as $data1)
                     {
                    
                 $_SESSION['username']=$data1['username'];
                 $_SESSION['firstName']= $data1['firstName'];
                 $_SESSION['lastName']=$data1['lastName'];
                 $_SESSION['gender']= $data1['gender'];
                 $_SESSION['dateOfBirth']= $data1['dateOfBirth'];
                 $_SESSION['religion']=$data1['religion'];
                 $_SESSION['presentAddress']=$data1['presentAddress'];
                 $_SESSION['permanentAddress']=$data1['permanentAddress'];
                 $_SESSION['phone']=$data1['phone'];
                 $_SESSION['email']=$data1['email'];
                 $_SESSION['personalWebsiteLink']=$data1['personalWebsiteLink'];

                        if(empty($_POST["remember"])) 
                        {
                            setcookie("username","");
                            setcookie("password","");
                        } 
                        else 
                        {
                            setcookie ("username",$_POST["username"],time() + 86400);
                            setcookie ("password",$_POST["password"],time() + 86400);
                        }

                       header("Location:home.php");
                    }   
                  
            
		       }
		         else {
			    echo "Login failed.";
				echo"<br>";
				echo "Please fill up the form properly";
		        }
		

		
           
		    $connection->close();
	    
			
		}	
    }
	?>
    
    
