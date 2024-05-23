<?php

session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patients";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>
<?php

