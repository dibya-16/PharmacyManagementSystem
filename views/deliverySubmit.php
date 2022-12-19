<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      form{
          background-color: skyblue;
          
          width:1150px;
          text-align: center;

        }
    </style>
</head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<body>
    

<?php 


include "../model/dbread.php";


if(isset($_GET['OrderID'])){
	$allSearchedUsers = searchUser($_GET['OrderID']);
    echo "<table>
<tr>
<th>OrderID</th>
<th>User Name</th>
<th>MedicineCodes</th>
<th>Quantities</th>
<th>GrandTotal</th>

<th>current status</th>
<th>status</th>

</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['OrderID']  . "</td>";
    echo "<td>" . $allSearchedUsers['Username']  . "</td>";
    echo "<td>" . $allSearchedUsers['MedicineCodes'] . "</td>";
    echo "<td>" . $allSearchedUsers['Quantities'] . "</td>";
    echo "<td>" . $allSearchedUsers['GrandTotal'] . "</td>";
    echo "<td>" . $allSearchedUsers['deliveryStatus'] . "</td>";
    // echo "<td>" ;
    // echo "<div id='result'></div>";
    // echo "</td>";
   $val = $allSearchedUsers["OrderID"];
    echo "<td>" ;
    ?>

   <select  name="deliveryStatus"  onchange="myFunction(this.value,<?php echo $val ?>)" id="deliveryStatus">;
   <?php 
  
  echo '  <option value="">Select one</option>';
  echo ' <option value="Canceled">Canceled</option>';
  echo '<option value="Delivered">Delivered</option>';
  echo '<option value="Accept">Accept</option>';


  echo '</select>';
  echo "</tr>";
    return;

}



?>


<script>
    function myFunction(val,OrderID) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET","../controllers/change.php?deliveryStatus="+val+"&OrderID="+OrderID,true);
      xhttp.send();
       }
   </script>

</body>
</html>