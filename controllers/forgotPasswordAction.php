<?php

	


	

    if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {


      
    if (empty($_POST['email'])||empty($_POST['newPassword'])) 
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
        
        
      }
    


    if($isValid){

       include"../model/databaseConnect.php";

        

         
          $email=$_POST['email'];
        
          $password = $_POST['newPassword'];
          include"../model/dbUpdatef.php";
        
       
       

         if ($response) {
           header("location:deliveryLogin.php");
         }
         else {
          echo "Didn't Match.Try again";
         }
         $connection->close();  
        }


       
  
    
    }  

  


  ?>
   