<?php
  $db = mysqli_connect('localhost', 'david', 'david', 'project');
  if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM tbl_guests WHERE gEmail='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['save'])) {
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  	  $query = "INSERT INTO users (username, email, password) 
  	       	VALUES ('$username', '$email', '".md5($password)."')";
  	  $results = mysqli_query($db, $query);
  	  echo 'Saved!';
  	  exit();
  	}
  }

?>

<!DOCTYPE html>
<html>

<head>
    <script src="resource/js/jquery-3.4.1.min.js"></script>
</head>
<script>
 $('document').ready(function(){
 var username_state = false;
 var email_state = false;
 $('#username').on('blur', function(){
  var username = $('#username').val();
  if (username == '') {
  	username_state = false;
  	return;
  }
  $.ajax({
    url: 'register.php',
    type: 'post',
    data: {
    	'username_check' : 1,
    	'username' : username,
    },
    success: function(response){
      if (response == 'taken' ) {
      	username_state = false;
      	$('#username').parent().removeClass();
      	$('#username').parent().addClass("form_error");
      	$('#username').siblings("span").text('Sorry... Username already taken');
      }else if (response == 'not_taken') {
      	username_state = true;
      	$('#username').parent().removeClass();
      	$('#username').parent().addClass("form_success");
      	$('#username').siblings("span").text('Username available');
      }
    }
  });
 });		
  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'js.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $('#reg_btn').on('click', function(){
 	var username = $('#username').val();
 	var email = $('#email').val();
 	var password = $('#password').val();
 	if (username_state == false || email_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: 'register.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : email,
      		'username' : username,
      		'password' : password,
      	},
      	success: function(response){
      		alert('user saved');
      		$('#username').val('');
      		$('#email').val('');
      		$('#password').val('');
      	}
      });
 	}
 });
    });
</script>
<body>
 <form id="register_form">
      <h1>Register</h1>
      <div id="error_msg"></div>
	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	    <input type="email" name="email" placeholder="Email" id="email">
		<span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Password" id="password">
	  </div>
	  <div>
	 	<button type="button" name="register" id="reg_btn">Register</button>
	  </div>
	</form>
</body>
</html>
<!-- scripts -->
<script src="jquery-3.2.1.min.js"></script>
<script src="script.js"></script>