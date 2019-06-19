<!DOCTYPE html>
<?php
session_start();
$_SESSION['operation']="SIGN-UP";

?>
<html>
<head>
 <link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
<title>IGDTUW</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="signup.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link rel="shortcut icon" href="logo.png" type="image/x-icon"/
	<!-- main -->
    
   
<style>
/* Style all input fields */


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: black;
  color: white;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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



<div class="main-w3layouts wrapper">
		<h1>SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
                    <input class="text w3lpass" type="text" placeholder="First name" name="first_name" required="">
                    <input class="text w3lpass" type="text" placeholder="Last name" name="last_name"  required="">
					<input class="text w3lpass" type="text" name="username" placeholder="Username" required="">
					 <input class="text w3lpass" type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required="">
                    <div class="message" id="message">
  <h3>Password must contain the following:</h3>
                        <br>
  <div id="letter" class="invalid">A <b>lowercase</b> letter</div>
                        <br>
                        <div id="capital" class="invalid">A <b>capital (uppercase)</b> letter</div>
                        <br>
  <div id="number" class="invalid">A <b>number</b></div>
                        <br>
  <div id="length" class="invalid">Minimum <b>8 characters</b></div>
</div>
<input class="text w3lpass" type="password" placeholder="Confirm Password" id="psw2" name="psw2" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
					<div class="wthree-text">
                    	
					<input type="submit" name="submit" value="SIGNUP">
				</form>
				<p>Already have an account? <a href="login.php"> Login Now!</a></p>
                    
<?php
    
    if(isset($_POST['submit']))
{
    
    $first_name=strtoupper($_POST['first_name']);
    $last_name=strtoupper($_POST['last_name']);
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['psw'];
    $password2=$_POST['psw2'];
    if($password===$password2)
    {
        $connection=mysqli_connect('localhost','root','','users');
        $query = "SELECT username FROM LOGIN";
        $result = mysqli_query($connection,$query);
        $flag=0;
        while($row = mysqli_fetch_assoc($result))
        {
            if($row['username']==$username)
            {
                global $flag;
                echo "<b>Username already taken</b>";
                $flag = 1;
            }
        }
        
        if($flag==0)
        {
            $query = "INSERT INTO LOGIN(username,password,first_name,last_name,email) VALUES ( '$username','$password','$first_name', '$last_name', '$email')";
            $result=mysqli_query($connection,$query);
            if($result)
                echo "<b>You may now login.</b>";
            else
                echo "failed".mysqli_error($connection);
        }
        
    }
    else
        echo "<b> Passwords don't match </b>";
}
    ?>
			</div>
		</div>
    </div>


			
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


</body>
</html>
