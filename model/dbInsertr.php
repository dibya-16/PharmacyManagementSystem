<?php
 $sql= "INSERT INTO deliverymaninfo(firstName,lastName,gender,dateOfBirth,religion,presentAddress, permanentAddress, phone, email,personalWebsiteLink,username, password, role) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?,?, ?, ?)";
            $stmt = $connection->prepare($sql);
	        $stmt->bind_param("sssssssssssss", $firstName,$lastName,$gender,$date,$religion,$presentAddress,$permanentAddress,$phone,$email,$personalWebsiteLink,$username,$password,$role);

	        $response = $stmt->execute();
 ?>