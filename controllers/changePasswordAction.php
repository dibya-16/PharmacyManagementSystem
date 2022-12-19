
	<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:deliveryLogout.php");
    }
?>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {


		
    $decode = json_decode($_POST["obj"], false);

    $previousPassword = $decode->previousPassword;
    $newPassword = $decode->newPassword;
    $isValid=false;
  
      if (empty($previousPassword)||empty($newPassword)) 
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

        $sql = "SELECT * FROM deliverymaninfo WHERE password = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s",$password);
        $password = $previousPassword;
        
        
        $responses = $stmt->execute();

        if ($responses) {
            $data = $stmt->get_result();

        if ($data->num_rows > 0) {

          $sql = "UPDATE deliverymaninfo SET password  = ? WHERE username = ?";

          $stmt = $connection->prepare($sql);
          $stmt->bind_param("ss", $password, $username);
          $username = $_SESSION['username'];
        
          $password =  $newPassword;
        
       
         $response = $stmt->execute();

         if ($response) {
           echo "Password Updated Succssfully";
         }
         else {
          echo "Didn't Match.Try again";
         }
           
        }


       }
       $connection->close();
    
    }

        




          
    
    }  

  ?>