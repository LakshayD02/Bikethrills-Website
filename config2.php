<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "bikethrills";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
  
  }
  ?>












<!-- 

//start session on web page
// session_start();

//config.php

//Include Google Client Library for PHP autoload file
// require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
// $google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
// $google_client->setClientId('718601787081-pgc1or66tjgnkkj1tdoinf2ilp3ehl4t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
// $google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
// $google_client->setRedirectUri('http://localhost:8080/bikethrills/login.php');

// to get the email and profile 
// $google_client->addScope('email');

// $google_client->addScope('profile');

 Close your php here -->