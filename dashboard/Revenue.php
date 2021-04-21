






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
  <th> <a style="width:100%"href="dashboard/Revenue.php">Revenue</a></th>
</tr>
</table> 
      <div style= "border: 1px solid black;padding: 10px; margin-left:250px;width:800px">

                <div style=" width: 100%;padding:8px;margin-bottom:8px;">
                  <form method="POST" action="Revenue.php">
                                <div>
                                <select name="Pizza_Size" style=" width: 98%;padding:8px;margin-bottom:8px;">
                                  <option >Pizza Size</option>
                                  <option >Small Pizza</option>
                                  <option >Medium Pizza</option>
                                  <option >Large Pizza</option>
                                </select>
                                </div><br>
                                <div>
                                  <label class="col-md-4 control-label" for="date_released"></label>
                                <div>
                                  <input style="width:97%"type="date"  name="date_released" required="required"/>
                                </div>   
                                </div><br>
                                <div>
                                  <button class="btn btn-primary" name="filter" style="width: 98%;padding:6px;margin-bottom:8px;" ><span class="glyphicon glyphicon-search"> Search</span></button>
                                </div>
                                                 
                    </form>
              </div>

<?php
    include 'db.php';
    if(ISSET($_POST['filter'])){
        $Pizza_Size = $_POST['Pizza_Size'];
        $date_released = $_POST['date_released'];
           
?>

                   <table border = '1'>
                      <tbody>
                              <?php
                             
                            $query = mysqli_query($con, "SELECT * FROM `order` WHERE `Delivery_Date` = '$date_released' And `Pizza_Size` = '$Pizza_Size' ORDER BY `Delivery_Date` DESC") or die(mysqli_error());
                            while($row = mysqli_fetch_array($query)){
                               
                               if($row['status'] == 'Delivered'){
                              ?>

                              <table width="100%" class="table table-bordered">
                                      <tr>
                                        <td colspan="3"> 
                                           <div class="col-md-12">
                                             <div class="col-md-12">
                                                  <div class="blog-news-title">
                                                    <h3><?php echo $row['Pizza_Size']; ?></h3>
                                                  </div>
                                                  <div class="blog-news-details">
                                                        <h5 style="font-weight: bold;">Pizza Type  : <?php echo $row['Pizza_Type']; ?></h5>                       
                                                        <h5 style="font-weight: bold;">Quantity  : <?php echo $row['Quantity']; ?></h5>
                                                        <h5 style="font-weight: bold;">Delivery Date  : <?php echo $row['Delivery_Date']; ?></h5>               
                                                         <a class="btn btn-success" href=""><?php echo $row['status']; ?></a>
                                                  </div>
                                              </div>              
                                            <h1 class="page-header"></h1>
                                          </div>
                                        </td>
                                      </tr>
                              </table>
                              <?php
                               }else{
                              ?>
                                    <h3>Please Select Date And Pizza Type</h3>
                              <?php
                               }
                              ?>    
                      </tbody>
                    </table>


<?php
        }
    }
?> 

      </div>

  </body>
</html>



















