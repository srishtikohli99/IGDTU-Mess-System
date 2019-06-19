<!DOCTYPE html>
<?php
session_start();
if($_SESSION['admin_username']==null)
{
    header("Location: ../mess/loginadmin.php");
}
    $connection = mysqli_connect('localhost','root','','users');
    $query = "SELECT * FROM user_griev order by date  desc";
    $result = mysqli_query($connection,$query);
?>

<html lang="en">
<head>
  <title>GRIEVANCES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>GRIEVANCES:</h2>
<br>
    <?php
  
        
        while($row=mysqli_fetch_assoc($result))
        {
            $username=$row['username'];
            $date=$row['date'];
            $comments=$row['comment'];
           echo "
           <div class='panel-group'>
           <div class='panel panel-primary'>
           <div class='panel-heading'><b>By $username on $date</b></div>
            <div class='panel-body'>$comments</div>
             </div>

    
  </div>
            <br>
            <br>";
            
        }
         ?>
   
</div>

</body>
</html>
