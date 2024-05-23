<?php

include ('C:\xampp\htdocs\covid19-webproject\connections\conn_patient.php');
?>
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $patientName = $_POST['patientName'];
    $address = $_POST ['address'];
    $locationDetails = $_POST['locationDetails'];

    // Insert data into database
    $sql = "INSERT INTO registrations (patientName, address, locationDetails) VALUES ('$patientName', '$address', '$locationDetails')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login page
        header("Location: loginaspatient.php");
        exit();
    } else {
        // Display error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center text-blue-500 mb-8">Hospital Registration Form</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="patientName" class="block text-gray-700 font-bold mb-2">Patient Name</label>
                    <input type="text" id="hospitalName" name="patientName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter hospital name" required>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                    <input type="text" id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter address" required>
                </div>
                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-bold mb-2">Location details</label>
                    <input type="text" id="locationdetails" name="locationDetails" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Location" required>
                </div>
               
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
                    <button type="reset" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4">Reset</button>
                </div>
              

            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
