
<?php

include 'db.php';

$id = $_GET['id'];

$select = "SELECT * FROM `product` WHERE id = '$id'";
$result  = mysqli_query($con, $select);

$rowdata = mysqli_fetch_assoc($result);



?>




<!DOCTYPE html>
<html>
  <head> 
   <title>Pizza Order</title>  
  </head>
  <body>
    <br><br><br>
      <div class=""style= "border: 1px solid black;padding: 10px; margin-left:400px;width:500px">
            <h1 style= " margin-left:180px;">Edit Pizza</h1>
             
  
                    <form class="form-horizontal" method="POST" action="update.php" enctype="multipart/form-data">
                        <fieldset>
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="name"></label>  
                          <div class="col-md-4">
                              <select name="Pizza_Type" value="name"style="width: 100%">
                                <option ><?php echo $rowdata['Pizza_Type']; ?></option>
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
                        </div><br> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="name"></label>  
                        <div class="col-md-4">
                                <select name="Pizza_Size" value="name"style="width: 100%">
                                  <option ><?php echo $rowdata['Pizza_Size']; ?></option>
                                  <option >Small Pizza</option>
                                  <option >Medium Pizza</option>
                                  <option >Large Pizza</option>
                                </select>
                          </div>
                        </div><br>                        
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="small"></label>  
                          <div class="col-md-4">
                          <input style="width: 99%"id="price" name="price" type="text" placeholder="Price" class="form-control input-md" required="" value="<?php echo $rowdata['price']; ?>">      
                          </div>
                        </div><br>
                      
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone_number"></label>  
                          <div class="col-md-4">
                          <input style="width: 99%"id="phone_number" name="phone_number" type="text" placeholder="Phone number" class="form-control input-md" required="" value="<?php echo $rowdata['phone_number']; ?>">      
                          </div>
                        </div><br>                        

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone_number"></label>  
                          <div class="col-md-4">
                          <input style="width: 99%"id="owner_name" name="owner_name" type="text" placeholder="Owner Name" class="form-control input-md" required="" value="<?php echo $rowdata['owner_name']; ?>"> 
                          </div>
                        </div><br>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="description"></label>
                          <div class="col-md-4">                     
                            <textarea style="width: 99%"class="form-control" rows="5" id="description" name="description"><?php echo $rowdata['info']; ?></textarea>
                          </div>
                        </div><br>

                        <input type="hidden" name="hid" value="<?php echo $id; ?>">
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="submit"></label>
                          <div class="col-md-4">
                            <button id="submit" name="submit" style="width: 99%">UPDATE</button>
                          </div>
                        </div>

                        </fieldset>
                    </form>
              
        
      </div>
  </body>
</html>











