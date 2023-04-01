<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM l_users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Login page</title>
  </head>
  <body>
  <div class="container">
    <header>Login</header>
    <form class="" action="" method="post" autocomplete="off">
    <div class="field Username">
     <div class="input-field ">
        <input type="text" name="email" id = "email" required value=""placeholder="Enter your Email"> <br>
     </div>
    </div>
    <div class="field password">
     <div class="input-field ">
        <input type="password" name="password" id = "password" required value="" placeholder="Enter your password"> <br>
     </div>
    </div>
    <div class="input-field button">
        <input type="submit"name="submit" value="Login">
    </div>
    <br>
    <a href="registration.php">Registration</a>
</div>

    </form>
   
  </body>
</html>