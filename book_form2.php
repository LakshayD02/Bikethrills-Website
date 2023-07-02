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

$card_number=$_POST['card_number'];
$card_holder=$_POST['card_holder'];
$expiry_date=$_POST['expiry_date'];
$CVV=$_POST['CVV'];

$sql = "INSERT into `payment` (`sr`, `card_number`, `card_holder`, `expiry_date`, `CVV`) VALUES (NULL, '$card_number', '$card_holder', '$expiry_date', '$CVV')";

if ($conn->query($sql) === TRUE) {
  
echo "Payment Done! You have Sucessfully Booked your bike";

} else {echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>