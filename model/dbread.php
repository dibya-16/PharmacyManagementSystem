<?php 
//include "databaseConnect.php";
 
function searchUser($username){
	include "databaseConnect.php";
    $sql = "SELECT * FROM orderhistory WHERE OrderID  = ?";
	$stmt = $connection->prepare($sql);
	$stmt->bind_param("s",$username);
	        
   
    $stmt->execute();
    $result=$stmt->get_result();
    return $result->fetch_assoc();
}


?>