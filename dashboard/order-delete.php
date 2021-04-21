<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM `order` WHERE id = '$id'";
$result = mysqli_query($con , $sql);

header('Location: order-list.php')

?>