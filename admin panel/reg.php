<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE covid_management_system";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("covid_management_system");

// Create patients table
$sql = "CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    covid_test_result ENUM('positive', 'negative', 'pending'),
    vaccination_status ENUM('vaccinated', 'not vaccinated', 'pending')
)";
if ($conn->query($sql) === TRUE) {
    echo "Patients table created successfully<br>";
} else {
    echo "Error creating patients table: " . $conn->error . "<br>";
}

// Create hospitals table
$sql = "CREATE TABLE hospitals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Hospitals table created successfully<br>";
} else {
    echo "Error creating hospitals table: " . $conn->error . "<br>";
}

// Create appointments table
$sql = "CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    hospital_id INT,
    appointment_date DATETIME,
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (hospital_id) REFERENCES hospitals(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Appointments table created successfully<br>";
} else {
    echo "Error creating appointments table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>




                           





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Neon Registration Form</title>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #0a0a0a;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
    padding: 30px;
    text-align: center;
}

h2 {
    color: #fff;
    font-weight: 400;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    width: calc(100% - 20px);
    padding: 15px;
    margin-bottom: 20px;
    border: none;
    border-radius: 30px;
    box-sizing: border-box;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
    text-align: center;
    outline: none;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
button:focus {
    background-color: rgba(255, 255, 255, 0.3);
}

button {
    background-color: #ff4d4d;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #ff6666;
}

.error-message {
    color: #ff4d4d;
    margin-bottom: 10px;
}

.success-message {
    color: #00ff00;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<div class="container">
    <h2>Neon Register</h2>
    <form action="login" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <small>Already registered? <a href="loginasadmin.php">Login Here</a></small>
    </form>
</div>

</body>
</html>
