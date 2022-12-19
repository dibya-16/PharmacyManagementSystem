<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery List</title>
    <link rel="stylesheet"type="text/css"href="css/menustyle.css">
    <style>
      form{
          background-color: RGB(150,58,2);
          
          width:1150px;
          
          text-align: center;

        }
    </style>
</head>
  <?php
       include "header.php";
    ?>
<body>
    <br>

     <h2>Accept Delivery:</h2>
    
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

    
     <?php
          include "../controllers/deliveryListAction.php";
       ?>
       <?php
       include "../model/databaseConnect.php";
       $sql =$connection->prepare( "SELECT * FROM orderhistory");



       $sql->execute();

       $result=$sql->get_result();
       ?>
       

       <center><form action="deliverySubmit.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
    <fieldset>
        <legend>View User Details</legend>
       
        Customer Order Id :&nbsp &nbsp&nbsp&nbsp<select  name="OrderID">

                                    <option>Select a Value</option>
                                    <?php
                                   foreach($result as $data){
                                     echo "<option>";
                                     echo $data["OrderID"];
                                     echo "</option>";
                                   }
                                     ?>

                                </select>
                               
                                <br><br><br>

        <br> <br>
        <input type="submit" class="Search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Customer info will be shown here...</b></div>



</form></center>

       

      
      
      
    

         
      

<script >
                  function Result(pform) {
                  
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?OrderID=" +pform.OrderID.value);
   
      xhttp.send();
       }
              </script>

  </body>
  <?php
       include "footer.php";
       include "deliverySubmit.php";
    ?>
</html>