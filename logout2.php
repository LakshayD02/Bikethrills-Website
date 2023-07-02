Logout.php page code for Google OAuth Login in PHP

<?php

//logout.php

include('config2.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index2.php');

?>