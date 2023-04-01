<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM l_users WHERE email = '$email'");
  
    if($password == $confirmpassword){
      $query = "INSERT INTO l_users VALUES('','$name','$email','$password','confirmpassword')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet"  href="index.css"/>
  </head>
  <body>
<div class="container">
  <header>Registration</header>
  <form class="" action="" method="post" autocomplete="off" >
  <div class="container-cont">
                           <div class="box">
                            <input id="email" type="email" placeholder="enter your email" name="email" autocomplete="on" required>
                            </div>

                            <div class="box">
                            <input id="password" type="password" placeholder="password" name="password" pattern=".{6,}" title="Six or more characters" required> 
                            </div>

                            <div class="box">
                            <input type="text" name="name" id = "name"  placeholder="username" required value="">
                            </div> 

                            <div class="box">
                            <input id="confirmpassword" type="password" placeholder="confirm password" name="confirmpassword"  title="Six or more characters" required> 
                            </div>

                        <div class="box">
                            <span >Birth Date</span>
                            <input id="bday" type="date" name="bday" required>
                        </div>

                        <div class="box">
                            <span>Birth Hour</span>
                            <input id="bh" type="time" name="bh"> 
                        </div>
                        <div class="box">
                            <span>Select your gender</span>
                        <div class="category">
                            <span>Male</span>
                            <input id="gen" value="m" type="radio" value="male" name="gender"style="height: 15px; margin-top: 6px;" required > 
                        </div>
                        <div class="category">
                            <span>Female</span>
                            <input id="gen" value="f" type="radio" value="male" name="gender"style="height: 15px;margin-right:13px;margin-top: 6px;" required> 
                        </div>
                        </div>
                        <div class="box">
                            <span>Favorite color</span>
                            <input id="b" type="color" name="b"> 
                        </div>
                
                        <div class="box">
                            <span id="favcolor" name="favcolor">Country of birth</span>
                             <select>
                                <option value="kazakhstan"> Kazakhstan</option>
                                <option value="russia"> Russia</option>
                                <option value="usa"> USA</option>
                                <option value="korea"> Korea</option>
                                <option value="japon"> Japon</option>
                            </select>
                        </div>
                        <div class="box">
                            <span>Favorite car</span>
                            <input id="favcar" type="textarea"  name="favcar" value="Mercedes" disabled>
                        </div>

    <div class="input-field button">
        <input type="submit"name="submit" value="Register">
    </div>
  </form>
  <br>
  <a href="login.php">Login</a>

</div>
