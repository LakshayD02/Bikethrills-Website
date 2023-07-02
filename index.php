<?php session_start();
include_once('config.php');

//Code for Signup
if(isset($_POST['submit'])){

//Getting Post values
$name=$_POST['username'];	
$email=$_POST['email'];	
$cnumber=$_POST['contactnumber'];	
$loginpass=md5($_POST['password']);             // Password is encrypted using MD5

//Generating 6 Digit Random OTP
$otp= mt_rand(100000, 999999);	

// Query for validation of  email-id
$ret="SELECT id FROM  tblusers where (emailId=:uemail)";
$queryt = $dbh -> prepare($ret);
$queryt->bindParam(':uemail',$email,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{

//Query for Insert user data if email not registered 
$emailverifiy=0;
$sql="INSERT INTO tblusers(userName,emailId,ContactNumber,userPassword,emailOtp,isEmailVerify) VALUES(:fname,:emaill,:cnumber,:hashedpass,:otp,:isactive)";
$query = $dbh->prepare($sql);

// Binding Post Values
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':emaill',$email,PDO::PARAM_STR);
$query->bindParam(':cnumber',$cnumber,PDO::PARAM_STR);
$query->bindParam(':hashedpass',$loginpass,PDO::PARAM_STR);
$query->bindParam(':otp',$otp,PDO::PARAM_STR);
$query->bindParam(':isactive',$emailverify,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['emailid']=$email;	

//Code for Sending Email
$subject = "OTP Verification";
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:User Signup<yourname@yourdomain.com>'."\r\n";                          
$ms.="<html></body><div><div>Dear $name,</div></br></br>";
$ms.="<div style='padding-top:8px;'>Thank you for Registering with us. OTP for for Account Verification is $otp</div><div></div></body></html>";

mail($email, $subject, $ms, $headers, 3306); 

echo "<script>window.location.href='verify-otp.php'</script>";
}else {
echo "<script>alert('Something Went Wrong. Please try again');</script>";	
}} else{
echo "<script>alert('Email Address is already Registered!');</script>";
}
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<title>REGISTER</title>
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
<label>Name</label>
<input type="text" class="form-control" name="username" required="required">
</div>
 
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="email" required="required">
</div>
		
<div class="form-group">
<label>Contact Number</label>
<input type="text" class="form-control" name="contactnumber" required="required">
</div>
 
<div class="form-group">
<label> Password</label>
<input type="password" class="form-control" name="password" required="required">
</div>
 
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Sign Up</button>
</div>

<div class="text-center small">Already have an account? <a href="login.php" target="_blank">Login here</a></div>

</form>
 
</div>
</body>
</html>