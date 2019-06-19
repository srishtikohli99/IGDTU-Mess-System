<!DOCTYPE html>

<?php
session_start();
$_SESSION['operation'] = "SIGN-IN";
//include "functions.php";
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
  <h3>IGDTUW MESS LOGIN</h3>
</div>
<div class="login-page">
  <div class="form">

    <form class="login-form" action="login.php" method="post">
      <input name="username" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
<?php
    if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    //login($username,$password);
        $connection = mysqli_connect('localhost','root','','users');
    $query = "SELECT username, password, first_name FROM login";
    $result = mysqli_query($connection, $query);
    $flag=0;
    while($row=mysqli_fetch_assoc($result))
    {
        $db_username = $row['username'];
        $db_password = $row['password'];
        $first_name = $row['first_name'];
        if($db_username==$username&&$db_password==$password)
        {
            global $flag;
            $_SESSION['username']=$db_username;
            $flag=1;
            header("Location: http://localhost/mess/welcome.php");
            
        }

    }
    if($flag==0)
        echo "Incorrect credentials";
    
}
?>
    <button name="submit">login</button>
    <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        
    </form>
    </div>
</div>
</body>
</html>