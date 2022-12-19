<?php

$sql= "INSERT INTO complainfile(customerOrderId, orderDate, complainFile) VALUES (?, ?, ?)";
            $stmt = $connection->prepare($sql);
	        $stmt->bind_param("iss", $customerOrderId, $orderDate,$complainFile);

	        $response = $stmt->execute();
?>