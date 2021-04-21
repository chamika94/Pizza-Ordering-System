<?php

include 'db.php';

$id = $_GET['id'];

$status ='New Order';

$query = "UPDATE `order` SET `status`='$status' WHERE `id`= '$id'";
$result = mysqli_query($con , $query);

header('Location: order-list.php');

?>