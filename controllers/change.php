<?php
include "../model/databaseConnect.php";

$deliveryStatus = $_GET['deliveryStatus'];
$OrderID = $_GET['OrderID'];


 
 $sql="UPDATE orderhistory set deliveryStatus = ? where OrderID = ?";
 $stmt = $connection->prepare($sql);
 $stmt-> bind_param("ss",$deliveryStatus,$OrderID);

$stmt->execute();
$stmt->close();
 $connection->close();


 

return;

?>