<!DOCTYPE html>

<?php
include "functions.php";
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>IGDTUW</title>
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
</head>
<body>  
<!--Navigation bar-->
<div id="nav-placeholder">
</div>
<script>
$(function(){
  $("#nav-placeholder").load("nav.php");
});
</script>
<!--end of Navigation bar-->
  
<div class="container">
  <h3>IGDTUW MESS SIGN-UP</h3>
</div>
<div class="login-page">
  <div class="form">
      <form class="register-form" action="signup.php" method="post">
      <input type="text" placeholder="First  name" name="first_name"/>
      <input type="text" placeholder="Last name" name="last_name"/>
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password"/>
      <input type="password" placeholder="Re-enter password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>

<?php
    if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    login($username,$password);
    
}
?>
    </div>
</div>
</body>
</html>