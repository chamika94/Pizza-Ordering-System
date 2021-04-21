<?php

include 'db.php';

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         $imagepath = "images/".$file_name;

      }else{

      }
   }
$Pizza_Type = $_POST['Pizza_Type'];
$Pizza_Size = $_POST['Pizza_Size'];
$price = $_POST['price'];
$phone_number = $_POST['phone_number'];
$owner_name = $_POST['owner_name'];
$description = $_POST['description'];
$date_released = $_POST['date_released'];

$query = "INSERT INTO `product`(`Pizza_Type`,`Pizza_Size`,`price`,`phone_number`,`owner_name`,`info`,`pic`,`date_released`) VALUES ('$Pizza_Type','$Pizza_Size','$price','$phone_number','$owner_name','$description','$imagepath','$date_released')";
$result = mysqli_query($con , $query);

header('Location: Pizza-page.php');

?>