<?php

include 'db.php';



$Pizza_Type = $_POST['Pizza_Type'];
$Pizza_Size = $_POST['Pizza_Size'];
$price = $_POST['price'];
$phone_number = $_POST['phone_number'];
$owner_name = $_POST['owner_name'];
$description = $_POST['description'];
$id = $_POST['hid'];

$query = "UPDATE `product` SET `Pizza_Type`='$Pizza_Type',`Pizza_Size`='$Pizza_Size',`price`='$price',`phone_number`='$phone_number',`owner_name`='$owner_name',`info`='$description' WHERE `id`= '$id'";
$result = mysqli_query($con , $query);

header('Location: pizza-list.php');

?>