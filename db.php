<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "bikethrills";
    $con = mysqli_connect($servername,$username,$password,"$dbname");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
      ?>