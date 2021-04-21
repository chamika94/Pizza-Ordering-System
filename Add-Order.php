<?php

include 'db.php';  
$Customer_Name = $_POST['Customer_Name'];
$Phone_Number = $_POST['Phone_Number'];
$NIC = $_POST['NIC'];
$date_released = $_POST['date_released'];
$Pizza_Type = $_POST['Pizza_Type'];
$Pizza_Size = $_POST['Pizza_Size'];
$Quantity = $_POST['Quantity'];
$status ='New Order';
 

$query = "INSERT INTO `order`(`Customer_Name`,`Phone_Number`,`NIC_Number`,`Delivery_Date`,`Pizza_Type`,`Pizza_Size`,`Quantity`,`status`) VALUES ('$Customer_Name','$Phone_Number','$NIC','$date_released','$Pizza_Type','$Pizza_Size','$Quantity','$status')";
$result = mysqli_query($con , $query);

header('Location: Order-page.php?status=done');

?>