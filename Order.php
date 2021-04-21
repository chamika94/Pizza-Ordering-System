<?php

include 'db.php';

$id = $_GET['id'];

$select = "SELECT * FROM `product` WHERE id = '$id'";
$result  = mysqli_query($con, $select);

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
  <head> 
   <title>Pizza Order</title>  
  </head>
  <body>
    <br><br><br>
      <div style= "border: 1px solid black;padding: 10px; margin-left:400px;width:500px">
            <h1 style= " margin-left:180px;">Order Now</h1>
             
                    <form  method="POST" action="Add-Order.php" enctype="multipart/form-data">
                        <fieldset>                        
                              <div>
                              <input  style="width:100%"id="Customer_Name" name="Customer_Name" type="text" placeholder="Your name"  required="">
                              </div><br>  
                              <div>
                              <input  style="width:100%"id="Phone_Number" name="Phone_Number" type="text" placeholder="Phone Number"  required="">
                              </div><br>
                              <div>
                              <input  style="width:100%"id="NIC" name="NIC" type="text" placeholder="NIC Number"  required="" value="">
                              </div><br>
                               <div>
                               <input  style="width:100%"type="date" class="form-control" name="date_released" required="required"/>
                               </div><br>
                                <div>
                                  <label for="Pizza_Type"></label>  
                                      <select name="Pizza_Type"style="width:100%">
                                        <option ><?php echo $row['Pizza_Type']; ?></option>
                                        <option >Neapolitan Pizza</option>
                                        <option >Chicago Pizza</option>
                                        <option >New York-Style Pizza</option>
                                        <option >Sicilian Pizza</option>
                                        <option >Greek Pizza</option>
                                        <option >California Pizza</option>
                                        <option >Detroit Pizza</option>
                                        <option >St. Louis Pizza</option>
                                      </select>      
                                </div><br>
                                <div>
                                  <label for="Pizza_Size"></label>  
                                      <select name="Pizza_Size"style="width:100%">
                                        <option ><?php echo $row['Pizza_Size']; ?></option>
                                        <option >Small Pizza</option>
                                        <option >Medium Pizza</option>
                                        <option >Large Pizza</option>
                                      </select> 
                                </div><br>
                              <div>
                              <input  style="width:100%"id="Quantity" name="Quantity" type="text" placeholder="Quantity" required="">
                              </div><br>
                              <div>
                                <button id="submit" name="submit">Order</button>
                              </div><br>
                              <div style= "padding: 10px; margin-left:150px;">
                                     <a style="width:100%"href="index.php"><< Back to Home</a>
                              </div>
                      </fieldset>
                   </form>
        
      </div>
  </body>
</html>


