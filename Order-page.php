<?php

session_start();

if(!isset($_SESSION['userID'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
  <head> 
  <title>Orders</title>  
  </head>
  <body>


      <table border="1" style= "border: 1px solid black;padding: 10px; margin-left:250px;width:822px">
      <tr>
      <th> <a style="width:100%"href="index.php">Home</a></th>
      <th> <a style="width:100%"href="Pizza-page.php">Pizza</a></th>
      <th> <a style="width:100%"href="Order-page.php">Order</a></th>
      <th> <a style="width:100%"href="logout.php">LogOut</a></th>
      </tr>
      </table>
 
      <div style= "border: 1px solid black;padding: 10px; margin-left:250px;width:800px">
          <div>  

                     <form method="POST" action="Order-page.php">
                          <div>
                            <label for="phone_number"></label>  
                            <div>
                            <input id="phone_number" name="phone_number" type="text" placeholder="Enter Here Your Phone Number.And check your Order Deliver Or Not..." required="" style="width: 99%;">
                            </div><br>
                          </div>
                          <div>
                           <button name="filter" style="width: 100%;padding:6px;margin-bottom:8px;" ><span></span> Find Your Order</button>
                          </div><br>
                          <div>
                           <a href="Order-page.php" style="width: 100%;padding:6px;margin-bottom:8px;margin-left:350px;" ><span></span> All Orders >></a>
                          </div>   
                    </form><br>
        
        <?php 

        include 'db.php';
         if(ISSET($_POST['filter'])){
        $Phone_Number = $_POST['phone_number'];
        $query = mysqli_query($con, "SELECT * FROM `order` WHERE `Phone_Number` = '$Phone_Number' ORDER BY `Delivery_Date` DESC") or die(mysqli_error());
        while($row = mysqli_fetch_array($query)){
        if($row['status'] == 'Delivered'){  

        ?>

            <div >
              <div style="border:1px solid #ccc; border-radius:8px; padding:8px; margin-bottom:5px; background-color:#e0e0e0;">
                  
                     <h1 style="font-weight: bold;margin-left:;"> <img style="border:0px solid #ccc; border-radius:50px; margin-bottom:-15px;"src="images/default_avatar.gif"> <?php echo $row['Customer_Name']; ?></h1>
                     <h4 style="font-weight: bold;margin-left:300px;"><?php echo $row['Pizza_Type']; ?></h4>
                     <h4 style="font-weight: bold;margin-left:300px;">Size  : <?php echo $row['Pizza_Size']; ?></h4>                     
                     <h5 style="font-weight: bold;margin-left:300px;">Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Quantity  : <?php echo $row['Quantity']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>
                                    
                    <div style= "padding: 10px; margin-left:310px;">
                         <button  href=""><?php echo $row['status']; ?></button> 
                    </div>
              </div>
            </div>
          <br>
          <?php
             }else{
          ?>
            <div >
              <div style="border:1px solid #ccc; border-radius:8px; padding:8px; margin-bottom:5px; background-color:#e0e0e0;">
                  
                     <h1 style="font-weight: bold;margin-left:;"> <img style="border:0px solid #ccc; border-radius:50px; margin-bottom:-15px;"src="images/default_avatar.gif"> <?php echo $row['Customer_Name']; ?></h1>
                     <h4 style="font-weight: bold;margin-left:300px;"><?php echo $row['Pizza_Type']; ?></h4>
                     <h4 style="font-weight: bold;margin-left:300px;">Size  : <?php echo $row['Pizza_Size']; ?></h4>                     
                     <h5 style="font-weight: bold;margin-left:300px;">Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Quantity  : <?php echo $row['Quantity']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>
                                    
                    <div style= "padding: 10px; margin-left:310px;">
                         <button  href=""><?php echo $row['status']; ?></button> 
                    </div>
              </div>
            </div>
        <br>
        <?php
          }}
         }else{
        $query = mysqli_query($con, "SELECT * FROM `order` ORDER BY `Delivery_Date` DESC") or die(mysqli_error());
          while($row = mysqli_fetch_array($query)){
           
           if($row['status'] == 'Delivered'){
        ?>
            <div >
              <div style="border:1px solid #ccc; border-radius:8px; padding:8px; margin-bottom:5px; background-color:#e0e0e0;">
                  
                     <h1 style="font-weight: bold;margin-left:;"> <img style="border:0px solid #ccc; border-radius:50px; margin-bottom:-15px;"src="images/default_avatar.gif"> <?php echo $row['Customer_Name']; ?></h1>
                     <h4 style="font-weight: bold;margin-left:300px;"><?php echo $row['Pizza_Type']; ?></h4>
                     <h4 style="font-weight: bold;margin-left:300px;">Size  : <?php echo $row['Pizza_Size']; ?></h4>                     
                     <h5 style="font-weight: bold;margin-left:300px;">Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Quantity  : <?php echo $row['Quantity']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>
                                    
                    <div style= "padding: 10px; margin-left:310px;">
                         <button  href=""><?php echo $row['status']; ?></button> 
                    </div>
              </div>
            </div>
          <br>
          <?php
             }else{
          ?>
            <div>
              <div style="border:1px solid #ccc; border-radius:8px; padding:8px; margin-bottom:5px; background-color:#e0e0e0;">
                  
                     <h1 style="font-weight: bold;margin-left:;"> <img style="border:0px solid #ccc; border-radius:50px; margin-bottom:-15px;"src="images/default_avatar.gif"> <?php echo $row['Customer_Name']; ?></h1>
                     <h4 style="font-weight: bold;margin-left:300px;"><?php echo $row['Pizza_Type']; ?></h4>
                     <h4 style="font-weight: bold;margin-left:300px;">Size  : <?php echo $row['Pizza_Size']; ?></h4>                     
                     <h5 style="font-weight: bold;margin-left:300px;">Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Quantity  : <?php echo $row['Quantity']; ?></h5>
                     <h5 style="font-weight: bold;margin-left:300px;">Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>
                                    
                    <div style= "padding: 10px; margin-left:310px;">
                         <button  href=""><?php echo $row['status']; ?></button> 
                    </div>
              </div>
            </div>
        <br>
        <?php
           }
          }
        }
        ?>
    </div>
      </div>

  </body>
</html>
























