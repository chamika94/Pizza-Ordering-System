<?php

session_start();

if(!isset($_SESSION['userID'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
  <head> 
  <title>Pizza</title>  
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

                <div  style=" width: 100%;padding:8px;margin-bottom:8px;">
                    <form method="POST" action="Pizza-page.php">
                          <div >
                          <select name="Pizza_Type" style=" width: 98%;padding:8px;margin-bottom:8px;">
                              <option >Pizza Type</option>
                              <option >Neapolitan Pizza</option>
                              <option >Chicago Pizza</option>
                              <option >New York-Style Pizza</option>
                              <option >Sicilian Pizza</option>
                              <option >Greek Pizza</option>
                              <option >California Pizza</option>
                              <option >Detroit Pizza</option>
                              <option >St. Louis Pizza</option>
                          </select>
                          </div>
                          <div>
                          <select name="Pizza_Size" style=" width: 98%;padding:8px;margin-bottom:8px;">
                              <option >Pizza Size</option>
                              <option >Small Pizza</option>
                              <option >Medium Pizza</option>
                              <option >Large Pizza</option>
                          </select>                           
                          </div>
                          <div>
                           <button class="btn btn-primary" name="filter" style="width: 98%;padding:6px;margin-bottom:8px;" ><span class="glyphicon glyphicon-search"></span> Filter</button>
                          </div>
                          <div>
                             <a href="Pizza-Page.php" class="btn btn-warning"  style="width: 100%;padding:6px;margin-bottom:8px;margin-left:340px;" ><span class="glyphicon glyphicon-refresh"></span> All Products >></a>
                          </div>   
                    </form>
               </div>

<?php
 include 'db.php';

     if(ISSET($_POST['filter'])){
        $Pizza_Size = $_POST['Pizza_Size'];
        $Pizza_Type = $_POST['Pizza_Type'];
        $query = mysqli_query($con, "SELECT * FROM `product` WHERE `Pizza_Type` = '$Pizza_Type' or `Pizza_Size` = '$Pizza_Size' ORDER BY `date_released` DESC") or die(mysqli_error());
        while($row = mysqli_fetch_array($query)){   
?>
      

  <!--//-----Fetch data ----//-->       
  <div style="border:1px solid #ccc; border-radius:8px; padding:8px; margin-bottom:5px; background-color:#e0e0e0;">
      
      
          <div style="border:1px solid #ccc; padding:1px; margin-bottom:2px;border-radius:15px; ">    
           <img style="border-radius:15px;width:100%;"src="<?php echo $row['pic']; ?>" alt="" class="img-responsive" >
          </div>   
          <div style="margin-left:50px;">
             <h2><?php echo $row['Pizza_Type']; ?></h2>
             <h3>Size : <?php echo $row['Pizza_Size']; ?></h3>
             <h4>Rs - <?php echo $row['price']; ?></h4>
             <p>Discription :  <?php echo $row['info']; ?></p>
             <p>Owner : <?php echo $row['owner_name']; ?></p>
             <p>Tel : <?php echo $row['phone_number']; ?></p>
             <p>Release Date : <?php echo date("F d, Y", strtotime($row['date_released']))?></p> 
          </div>
          <div>
           <a href="Order.php?id=<?php echo $row['id']; ?>" style="margin-left:310px;">Order Now >></a>
          </div>  
         <br>              
  </div>
<br>
<!--//-----End fetch data ----//-->    



<?php
  }
 }else{
       
        $query = mysqli_query($con, "SELECT * FROM `product` ORDER BY `date_released` DESC") or die(mysqli_error());
        while($row = mysqli_fetch_array($query)){
?>


  <!--//-----Fetch data ----//-->       
  <div style="border:1px solid #ccc; border-radius:8px; padding:8px; margin-bottom:5px; background-color:#e0e0e0;">
      
      
          <div style="border:1px solid #ccc; padding:1px; margin-bottom:2px;border-radius:15px; ">    
           <img style="border-radius:15px;width:100%;"src="<?php echo $row['pic']; ?>" alt="" class="img-responsive" >
          </div>   
          <div style="margin-left:50px;">
             <h2><?php echo $row['Pizza_Type']; ?></h2>
             <h3>Size : <?php echo $row['Pizza_Size']; ?></h3>
             <h4>Rs - <?php echo $row['price']; ?></h4>
             <p>Discription :  <?php echo $row['info']; ?></p>
             <p>Owner : <?php echo $row['owner_name']; ?></p>
             <p>Tel : <?php echo $row['phone_number']; ?></p>
             <p>Release Date : <?php echo date("F d, Y", strtotime($row['date_released']))?></p> 
          </div>
          <div>
           <a href="Order.php?id=<?php echo $row['id']; ?>" style="margin-left:310px;">Order Now >></a>
          </div>  
         <br>              
  </div>
<br>
<!--//-----End fetch data ----//--> 


<?php
        }
  }      

 ?>       


      </div>

  </body>
</html>




