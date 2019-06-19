<!doctype html>
<?php
    session_start();
    $connection= mysqli_connect('localhost','root','','users');
    $query = "SELECT * FROM NAVIGATION";
    $result= mysqli_query($connection,$query);
    ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>IGDTUW</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
<body>  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
         <?php
               while($row=mysqli_fetch_assoc($result))
            {
                $operation=$row['operation'];
                $link=$row['link'];
                if($operation == $_SESSION['operation'])
                echo "<li class = 'active'><a href='$link'>$operation</a></li>" ;
                else
                echo "<li><a href='$link'>$operation</a></li>" ;
                       
                   
               } ?>
    </ul>
  </div>
</nav> 
    </body>
</html>