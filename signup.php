
<?php
  include 'db.php';

  if(isset($_POST['create'])){

   $req_fields = array('first_name','last_name','email','password');

   foreach ($req_fields as $field){
    if(empty(trim($_POST[$field]))){
        $errors[] = $field;
    }
   }
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

    $result_set = mysqli_query($con, $query);

    if($result_set){
        if(mysqli_num_rows($result_set)==1){
           $errors[]='Email address already exists';
        }
    }
     if(empty($errors)){
          $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
           $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
           $password = mysqli_real_escape_string($con, $_POST['password']);
           $query ="INSERT INTO user ( ";
           $query .= "first_name, last_name, email, password";
           $query .= ") VALUES (";
           $query .= "'{$first_name}', '{$last_name}', '{$email}', '{$password}'";
           $query .=")";    

           $result = mysqli_query($con, $query);

            if($result){
                header('Location: login.php?user_added=successful');
            }  else{
            } 
     }
  }

?>

<!DOCTYPE html>
<html>
  <head>  
  <title>Sign Up</title> 
  </head>
  <body>
    <br><br><br>
      <div class=""style= "border: 1px solid black;padding: 10px; margin-left:400px;width:500px">
            <h1 style= " margin-left:200px;">Sign Up</h1>
                     <form role="form" method="POST" action="signup.php">
                            <fieldset>
                                <div class="form-group">
                                    <input style="width:100%"placeholder="Frist Name" name="first_name" type="text" autofocus >
                                </div><br>
                                <div class="form-group">
                                    <input style="width:100%"placeholder="Last Name" name="last_name" type="text"  >
                                </div><br>
                                <div class="form-group">
                                    <input style="width:100%"placeholder="Email" name="email" type="text" >
                                </div><br>
                                <div >
                                    <input style="width:100%"class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div><br>
                                <button style="width:100%"type="submit" name="create">Sign Up</button>
                            </fieldset>
                        </form>
      </div>
  </body>
</html>



