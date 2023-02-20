<?php
session_start();
require('connect.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="css/style_login.css">

  <style>

#bg {
  background-image: url('img/background_2.jpg');
}
form .form-field:nth-child(1)::before {
  background-image: url(img/user-icon.png);
 }
form .form-field:nth-child(2)::before {
  background-image: url(img/lock-icon.png);
 }

  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form method="post">
  <div class="form-field">
    <input type="text" placeholder="Email / Username" name="user" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" name="pass" required/>                         </div>
  
  <div class="form-field">
    <input type="submit" class="btn" name="btn_submit"/> 
  </div>
</form>
<!-- partial -->

<?php

if(isset($_POST['btn_submit'])){

    $username = stripslashes($_REQUEST['user']);
    $username = mysqli_real_escape_string($conn, $username);

    $password = stripslashes($_REQUEST['pass']);
    $password = mysqli_real_escape_string($conn, $password);

    $query   = "SELECT * FROM users WHERE username='$username'
     AND password= '$password' ";

     $result = mysqli_query($conn, $query);

     $rows = mysqli_num_rows($result);

     //echo rows

     if ($rows == 1){
         $_SESSION['username'] = $username;

         //redirect to user dashboard page

         header("Location: index_main.php");

     } else{
         echo "<div>
            <h1>incorrect username/password</h1> </br>


         </div>
         ";
     } 

} 
?>

  
</body>
</html>
