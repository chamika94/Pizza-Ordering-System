
<!DOCTYPE html>
<html>
  <head>  
  <title>Admin Panel</title> 
  </head>
  <body>
 <table border="1" style= "border: 1px solid black;padding: 10px; margin-left:250px;width:822px">
 <tr>
  <th> <a style="width:100%"href="pizza-list.php">Pizza</a></th>
  <th> <a style="width:100%"href="order-list.php">Order</a></th>
  <th> <a style="width:100%"href="Revenue.php">Revenue</a></th>
 </tr>
 </table> 
 <div style= "border: 1px solid black;padding: 10px; margin-left:250px;width:800px">
        
                <div style=" width: 100%;padding:8px;margin-bottom:8px;">
                    <form method="POST" action="order-list.php">
                          <div>
                          <select name="status" style=" width: 98%;padding:8px;margin-bottom:8px;">
                              <option >Select Order Type</option>
                              <option >Delivered</option>
                              <option >New Order</option>
                          </select>
                          </div><br>
                        <div>
                          <label class="col-md-4 control-label" for="date_released"></label>
                        <div>
                          <input style="width:97%"type="date"  name="date_released">
                        </div>   
                        </div><br>
                        <div>
                          <div>
                           <button name="filter" style="width: 98%;padding:6px;margin-bottom:8px;" ><span></span> Filter</button>
                          </div>
                          <div>
                             <a href="order-list.php" style="width: 100%;padding:6px;margin-bottom:8px; margin-left:340px;" ><span></span> All Oders >></a>
                          </div> <br>  
                    </form>
              </div>

                 <?php
                 include 'db.php'; 
                   if(ISSET($_POST['filter'])){
				        $date_released = $_POST['date_released'];
				        $status = $_POST['status'];
				        $query = mysqli_query($con, "SELECT * FROM `order` WHERE `status` = '$status' or `Delivery_Date` = '$date_released' ORDER BY `Delivery_Date` DESC") or die(mysqli_error());
				        while($row = mysqli_fetch_array($query)){ 

				        	if($row['status'] == 'Delivered'){
                 ?>

                                       <div style="border: 1px solid black;padding: 10px;margin-right:18px; ">

                                                  
                                                    <img style="border:0px solid #ccc; border-radius:50px;"src="images/default_avatar.gif">
                                                    <h2><?php echo $row['Pizza_Type']; ?></h2> 
                                                 
                                                        
                                                        <h5>Order By  : <?php echo $row['Customer_Name']; ?></h5>
                                                        <h5>Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                                                        <h5>NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                                                        <h5>Pizza Type  : <?php echo $row['Pizza_Type']; ?></h5>
                                                        <h5>Size  : <?php echo $row['Pizza_Size']; ?></h5>                        
                                                        <h5>Quantity  : <?php echo $row['Quantity']; ?></h5>
                                                        <h5>Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>
                                                        <button href=""><?php echo $row['status']; ?></button><br><br>
                                                        <div style= "padding: 10px; margin-left:330px;">
                                                         <a href="order-cancel.php?id=<?php echo $row['id']; ?>">Cancel</a>
                                                         <a style="color:red;" href="order-delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </div>
                                                         
                                           </div><br>
                                        
                              <?php
                               }else{
                              ?>       <div style="border: 1px solid black;padding: 10px;margin-right:18px; ">
 
                                                     <img style="border:0px solid #ccc; border-radius:50px;"src="images/default_avatar.gif">
                                                    <h2><?php echo $row['Pizza_Type']; ?></h2>
                                                    
                                                 
                                                        <h5>Order By  : <?php echo $row['Customer_Name']; ?></h5>
                                                        <h5>Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                                                        <h5>NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                                                        <h5>Pizza Type  : <?php echo $row['Pizza_Type']; ?></h5>
                                                        <h5>Size  : <?php echo $row['Pizza_Size']; ?></h5>                        
                                                        <h5>Quantity  : <?php echo $row['Quantity']; ?></h5>
                                                        <h5>Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5> 
                                                        <button href=""><?php echo $row['status']; ?></button><br><br>
                                                        <div style= "padding: 10px; margin-left:330px;">                                              
                                                        <a href="order-confirm.php?id=<?php echo $row['id']; ?>">Confirm</a>
                                                        <a style="color:red;" href="order-delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </div>
                                                        
                                        </div><br>

                    <?php
                }
                             }
                            }else{
                              $query = mysqli_query($con, "SELECT * FROM `order` ORDER BY `Delivery_Date` DESC") or die(mysqli_error());
                              while($row = mysqli_fetch_array($query)){
                               
                               if($row['status'] == 'Delivered'){
                              ?>       <div style="border: 1px solid black;padding: 10px; margin-right:18px; ">

                                                  
                                                    <img style="border:0px solid #ccc; border-radius:50px;"src="images/default_avatar.gif">
                                                    <h2><?php echo $row['Pizza_Type']; ?></h2> 
                                                 
                                                        
                                                        <h5>Order By  : <?php echo $row['Customer_Name']; ?></h5>
                                                        <h5>Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                                                        <h5>NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                                                        <h5>Pizza Type  : <?php echo $row['Pizza_Type']; ?></h5>
                                                        <h5>Size  : <?php echo $row['Pizza_Size']; ?></h5>                        
                                                        <h5>Quantity  : <?php echo $row['Quantity']; ?></h5>
                                                        <h5>Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>
                                                        <button href=""><?php echo $row['status']; ?></button><br><br>
                                                        <div style= "padding: 10px; margin-left:330px;">
                                                         <a href="order-cancel.php?id=<?php echo $row['id']; ?>">Cancel</a>
                                                         <a style="color:red;" href="order-delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </div>
                                                         
                                           </div><br>
                                        
                              <?php
                               }else{
                              ?>       <div style="border: 1px solid black;padding: 10px;margin-right:18px; ">
 
                                                     <img style="border:0px solid #ccc; border-radius:50px;"src="images/default_avatar.gif">
                                                    <h2><?php echo $row['Pizza_Type']; ?></h2>
                                                    
                                                 
                                                        <h5>Order By  : <?php echo $row['Customer_Name']; ?></h5>
                                                        <h5>Phone Number  : <?php echo $row['Phone_Number']; ?></h5>
                                                        <h5>NIC Number  : <?php echo $row['NIC_Number']; ?></h5>
                                                        <h5>Pizza Type  : <?php echo $row['Pizza_Type']; ?></h5>
                                                        <h5>Size  : <?php echo $row['Pizza_Size']; ?></h5>                        
                                                        <h5>Quantity  : <?php echo $row['Quantity']; ?></h5>
                                                        <h5>Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5> 
                                                        <button href=""><?php echo $row['status']; ?></button><br><br>
                                                        <div style= "padding: 10px; margin-left:330px;">                                              
                                                        <a href="order-confirm.php?id=<?php echo $row['id']; ?>">Confirm</a>
                                                        <a style="color:red;" href="order-delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </div>
                                                        
                                        </div><br>
                              <?php
                               }
                              }
                            }
                              ?>    
                      </tbody>
                    </table>
                </div>
            </div>
      </div>
  </body>
</html>
























