<<?php


?>
<?php
// Start session

include ('C:\xampp\htdocs\covid19-webproject\connections\conn_patient.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $_POST['patientName'];
    $address = $_POST ['address'];
    $locationDetails = $_POST['locationDetails'];

    // Check if email and password match
    $sql = "SELECT * FROM registrations WHERE patientName='$patientName' AND address='$address' AND locationDetails ='$locationDetails' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email and password match
        $row = $result->fetch_assoc();
        // Store hospital name in session
        $_SESSION['patientName'] = $row['patientName'];
        // Set cookie for hospital name
        setcookie('patientName', $row['patientName'], time() + (86400 * 30), "/"); // 86400 = 1 day
        echo "Login successful";
        // Redirect to dashboard or another page
        header("Location: profile.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Login</title>
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
            <h2 class="text-2xl font-bold text-center text-blue-500 mb-8">Hospital Login Form</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">patient Name</label>
                    <input type="text" id="email" name="patientName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Name" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="text" id="email" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter address" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="text" id="password" name="locationDetails" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter locationDetails" required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
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
