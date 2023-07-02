<!-- CODE FOR DATABASE CONNECTION -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bikethrills";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$pickup_venue=$_POST['pickup_venue'];
$dropoff_venue=$_POST['dropoff_venue'];
$start_date=$_POST['start_date'];
$start_time=$_POST['start_time'];
$end_date=$_POST['end_date'];
$end_time=$_POST['end_time'];
$license=$_POST['license'];
$bikes=$_POST['bikes'];

$sql = "INSERT into `userdata` (`sr`, `name`, `email`,  `phone`,  `address`, `pickup_venue`, `dropoff_venue`, `start_date`, `start_time`, `end_date`, `end_time`, `license`, `bikes`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$pickup_venue', '$dropoff_venue', '$start_date', '$start_time', '$end_date', '$end_time', '$license', '$bikes')";

if ($conn->query($sql) === TRUE) {
  
  header("location:payment.php"); 

} else {echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>