<?php
 $sql =$connection->prepare( "SELECT * FROM orderhistory");
   
    $sql->execute();
    $result=$sql->get_result();
?>