<?php session_start();
include_once('config.php');
error_reporting(0);
 
//validation page
if($_SESSION['emailid']=='' ){
echo "<script>window.location.href='login.php'</script>";
}else{
 
//Code for otp verification
if(isset($_POST['verify'])){

//Getting Post values
$emailid=$_SESSION['emailid'];	
$otp=$_POST['emailotp'];	

// Getting otp from database on the behalf of the email
$stmt=$dbh->prepare("SELECT emailOtp FROM  tblusers where emailId=:emailid");
$stmt->execute(array(':emailid'=>$emailid)); 
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
$dbotp=$row['emailOtp'];
}
if($dbotp!=$otp){
echo "<script>alert('Please Enter Correct OTP');</script>";	
} else {
$emailverifiy=1;
$sql="update tblusers set isEmailVerify=:emailverifiy where emailId=:emailid";
$query = $dbh->prepare($sql);

// Binding Post Values
$query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query->bindParam(':emailverifiy',$emailverifiy,PDO::PARAM_STR);
$query->execute();	
session_destroy();
echo "<script>alert('OTP Verified Successfully');</script>";	
echo "<script>window.location.href='login.php'</script>";
}}
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<title>VERIFY OTP</title>
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
<label>Email OTP</label>
<input type="text" class="form-control" name="emailotp" maxlength="6" required="required">
</div>
<div class="form-group">
			<label class="form-check-label"><a href="resend-otp.php">Resend OTP</a></label>
		</div>
 
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="verify">Verify</button>
</div>
<div class="text-center small">Already have an account? <a href="#">Login here</a></div>	
</form>
</body>
</html>