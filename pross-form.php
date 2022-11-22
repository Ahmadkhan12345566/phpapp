<?php

 $email = $_POST["email"];
 $username = $_POST["username"];
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];

  $con = new mysqli('localhost','root','password' ,'php_app');

  if (!$con){
      die(mysqli_error($con));
  }

  $sql = "INSERT INTO users (email,username,first_name,last_name)
          value  ('$email','$username','$firstname','l$lastname')";

  $result = mysqli_query($con,$sql);

  if($result){
      die("User Inserted");
  }else{
      die(mysqli_error($con));
  }


?>
