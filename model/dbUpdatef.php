<?php

 $sql = "UPDATE deliverymaninfo SET password  = ? WHERE email = ?";

          $stmt = $connection->prepare($sql);
          $stmt->bind_param("ss", $password, $email);
          $response = $stmt->execute();
?>