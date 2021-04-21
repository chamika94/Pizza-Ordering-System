<?php
session_start();

include 'db.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE  email= '$email' AND password= '$password'";
    $result = mysqli_query($con , $sql);

    $rows = mysqli_fetch_assoc($result);

    $_SESSION['userID']= $rows['id'];

    header('Location: Pizza-page.php');
}

?>

<!DOCTYPE html>
<html>
  <head> 
  <title>Log In</title>  
  </head>
  <body>
    <br><br><br>
      <div class=""style= "border: 1px solid black;padding: 10px; margin-left:400px;width:500px">
            <h1 style= " margin-left:200px;">Log In</h1>
             
                        <form role="form" method="POST" action="login.php">
                            <fieldset>
                                <div>
                                    <input style="width:100%"placeholder="Email" name="email" type="text" autofocus>
                                </div><br>
                                <div>
                                    <input style="width:100%"placeholder="Password" name="password" type="password" value="">
                                </div><br>
                                <button style="width:100%" type="submit" name="submit">Login</button><br>

                                <div style= "padding: 10px; margin-left:150px;">
                                     <a style="width:100%"href="index.php"><< Back to Home</a>
                                </div>
                            </fieldset>
                        </form>
        
      </div>
  </body>
</html>

























 