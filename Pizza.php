<!DOCTYPE html>
<html>
  <head> 
   <title>Pizza Order</title>  
  </head>
  <body>
    <br><br><br>
      <div style= "border: 1px solid black;padding: 10px; margin-left:400px;width:500px">
            <h1 style= " margin-left:180px;">Add Pizza</h1>
  
                    <form method="POST" action="Add-Pizza.php" enctype="multipart/form-data">
                        <fieldset>
                                <div>
                                  <label for="Pizza_Type"></label>  
                                  <div>
                                      <select name="Pizza_Type"style="width:100%">
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
                                </div><br>
                                <div>
                                  <label for="Pizza_Size"></label>  
                                  <div>
                                      <select name="Pizza_Size"style="width:100%">
                                        <option >Pizza Size</option>
                                        <option >Small Pizza</option>
                                        <option >Medium Pizza</option>
                                        <option >Large Pizza</option>
                                      </select> 
                                  </div>
                                </div><br>

                                <div>
                                  <label for="small"></label>  
                                  <div>
                                  <input style="width:99%"id="price" name="price" type="text" placeholder="Price"  required="">  
                                  </div>
                                </div><br>

                                <div>
                                  <label for="phone_number"></label>  
                                  <div>
                                  <input  style="width:99%"id="phone_number" name="phone_number" type="text" placeholder="Phone Number"  required="">
                                  </div>
                                </div><br>

                                <div>
                                  <label for="owner_name"></label>  
                                  <div>
                                  <input  style="width:99%"id="owner_name" name="owner_name" type="text" placeholder="Owner Name"  required="">
                                  </div>
                                </div><br>
                      
                                <div>
                                  <label  for="description"></label>
                                  <div>                     
                                    <textarea style="width:99%" rows="5" id="description" name="description" placeholder="Short Description"></textarea>
                                  </div>
                                </div><br>

                                <div>
                                  <label for="date_released"></label>
                                  <div >
                                  <input type="date" style="width:99%" name="date_released" required="required"/>
                                </div>
                                </div><br>

                                <div>
                                  <label for="image"></label>
                                  <div>
                                    <input id="image" name="image" type="file" style="width:100%">
                                  </div>
                                </div> <br>                            
                                <div>
                                  <label for="submit"></label>
                                  <div>
                                    <button id="submit" name="submit" style="width:99%">ADD PIZZA</button>
                                  </div>
                                </div><br>
                            </fieldset>
                      </form>
              </div>        
      </div>
  </body>
</html>



