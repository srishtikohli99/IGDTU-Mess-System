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
<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
</head>
<body>
	<!-- main -->
    
    <!--Navigation bar-->
<div id="nav-placeholder">
</div>
<script>
$(function(){
  $("#nav-placeholder").load("nav.php");
});
</script>
<!--end of Navigation bar-->
	<div class="main-w3layouts wrapper">
		<h1>SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
                    <input class="text w3lpass" type="text" placeholder="First name" name="first_name" required="">
                    <input class="text w3lpass" type="text" placeholder="Last name" name="last_name"  required="">
					<input class="text w3lpass" type="text" name="username" placeholder="Username" required="">
					 <input class="text w3lpass" type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
					<div class="wthree-text">
                    	
					<input type="submit" name="submit" value="SIGNUP">
				</form>
				<p>Already have an account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
	</div>
        
    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
    </div>
	<!-- //main -->

    				
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