<?php
   $sql = "SELECT * FROM deliverymaninfo WHERE username = ? and password = ?";
	        $stmt = $connection->prepare($sql);
	        $stmt->bind_param("ss",$username, $password);
	        $response = $stmt->execute();
?>