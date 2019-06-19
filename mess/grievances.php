

<!DOCTYPE html>

<?php
session_start();
$_SESSION['operation'] = "GRIEVANCES";
//include "functions.php";



?>

<html>
<head>
<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="grievances.css" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
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
 
<br>
    <br>
    <br>
    <br>
<div class="container">
  <form action="grievances.php" method="post"s>
    <div class="row">
      <div class="col-25">
        <label for="username">Username</label>
      </div>
        <div class="col-75">
        <input type="text" name="username" placeholder="Your username..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="comment">Comments</label>
      </div>
      <div class="col-75">
        <textarea name="comment" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>
    <?php
    
   if(isset($_POST['submit']))
   {
       $connection = mysqli_connect('localhost','root','','users');
    if($connection)
       $username = $_POST['username'];
        $comment = $_POST['comment'];
       $query = "INSERT INTO GRIEVANCES(username,comment) VALUES ('$username', '$comment')";
       $result=mysqli_query($connection,$query);
           if($result)
               echo "Thank you! Your comments are registered.";
       else
           echo "Failed".mysqli_error($connection);
}

?>

</body>
</html>
