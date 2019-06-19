<!DOCTYPE html>

<?php
session_start();
if($_SESSION['admin_username']==null)
{
    header("Location: ../mess/loginadmin.php");
}
   
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>

<h2>VOTE CONTROL</h2>
    <a href="count.php"><button class="button" name="count"><span>Count </span></button></a>
<form method="POST">

<button class="button" name="reset"><span>Reset </span></button>
    </form>
 <a href="welcomeadmin.php"><button class="button" name="count"><span>Dashboard </span></button></a>
    <?php
if(isset($_POST['reset']))
   {
    $connection = mysqli_connect('localhost','root','','users');
    $query = "UPDATE login SET starter=0, soup=0, main_course=0";
    $result = mysqli_query($connection,$query);
    if($result)
    {
        echo "<b> Values reset to 0.</b>";
    }
    
   }
   ?>
    
</body>
</html>
