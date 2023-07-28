<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel='stylesheet' type='text/css' href='threds.css'>
  </head>
  <body>
    
  <div class="header">
  	<h2>Register</h2>
  </div>
    <form class="" action="" method="post" autocomplete="off">
    <div class="input-group">
    </div>
    <div class="input-group">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      </div>
      <div class="input-group">
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      </div>
      <div class="input-group">
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      </div>
      <div class="input-group">
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      </div>
      <div class="input-group">
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      </div>
      <div class="input-group">
       <button type="submit"class="btn" name="submit">Register</button>
  	</div>
    <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
    </form>
    
  </body>
</html>