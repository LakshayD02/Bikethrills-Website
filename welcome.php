<?php session_start();
include_once('config.php');
 
if (strlen($_SESSION['ulogin']==0)) {
  header('');
  }
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<title>WELCOME</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
	

body {
	color: black;
	background: url(images/sign\ up\ bg.jpg) no-repeat;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 40px;
	box-shadow: none;
	border-color: black;
}
.form-control:focus {
	border-color: black;
}	
.form-control, .btn {        
	border-radius: 1px;
}
.form-header {
	margin: -30px -30px 20px;
	padding: 30px 30px 30px;
	text-align: center;
	background: darkblue;
	border-bottom: 1px solid #eee;
	color: white;
}
.form-header h2 {
	font-size: 40px;
	font-weight: bold;
	margin: 10 10 10px;
	font-family: 'Roboto', sans-serif;
}
.form-header p {
	margin: 20px 0 15px;
	font-size: 20px;
	line-height: normal;
	font-family: 'Roboto', sans-serif;
}
.signup-form {
	width: 550px;
	margin: 0 auto;	
	padding: 30px 0;	
}
.signup-form form {
	color: white;
	border-radius: 3px;
	margin-bottom: 15px;
	background: black;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 1);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}		
.signup-form label {
	font-weight: normal;
	font-size: 15px;
}
.signup-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: blue;
	border: none;
	min-width: 200px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #00b073 !important;
	outline: none;
}
.signup-form a {
	color: cyan;		
}
.signup-form a:hover {
	text-decoration: underline;
}

</style>
</head>
<body>
	
<div class="signup-form">
 <form  method="post">
<div class="form-header">
<img src="images/Screenshot (118).png" alt="Bike Thrills Logo" id="icon">
</div>
        <div class="form-group">
			<label>Welcome Back   </label>
        <?php  echo $_SESSION['fname'];
		?>
        </div>
 
<div class="form-group">
	
<div class="box">
         <h6>Follow Us</h6>
         <a href="https://www.facebook.com/profile.php?id=100090210905640&mibextid=ZbWKwL" target="_blank"> <i class="fab fa-facebook-f"></i>Facebook </a>
         <a href="https://instagram.com/bike.thrills?igshid=YmMyMTA2M2Y=" target="_blank"> <i class="fab fa-instagram"></i>Instagram </a>
      </div>
<br>
<a href="logout.php" class="btn btn-primary btn-block btn-lg" style="color: #fff;">Logout</a>
</div>	
    </form>
 
</div>
</body>
</html>