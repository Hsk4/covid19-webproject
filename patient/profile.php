<?php
// Start the session
session_start();

// Include the necessary files
include('../partials/links.php');
include('C:\xampp\htdocs\covid19-webproject\connections\conn_patient.php');

// Initialize variables
$name = "";
$address = "";
$location = "";

// Retrieve patient information from the database
if (isset($_SESSION['patientName'])) {
    $patient_id = $_SESSION['patientName'];
    $sql = "SELECT * FROM registrations WHERE patientName='$patient_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        $row = mysqli_fetch_assoc($result);
        $name = $row['patientName'];
        $address = $row['address'];
        $location = $row['locationDetails'];
    } else {
        echo "0 results";
    }
} else {
    echo "Patient not logged in.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .profile-card {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 20px auto;
            object-fit: cover;
        }
        .patient-info {
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- SIDEBAR START -->
    <?php include('../partials/sidebar.php'); ?>
    <!-- SIDEBAR END -->

    <!-- NAVBAR START -->
    <div class="page-container">
        <!-- HEADER DESKTOP -->
        <?php include('../partials/navbar.php'); ?>
        <!-- NAVBAR END -->

        <!-- MAIN CONTENT START -->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container mt-5">
                    <div class="profile-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top profile-img" alt="Profile Picture">
                        <div class="patient-info">
                            <h5 class="card-title text-center">Patient Information</h5>
                            <hr>
                            <!-- Display patient information -->
                            <div class="mb-3">
                                <p><strong>Name:</strong> <?php echo $name; ?></p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Address:</strong> <?php echo $address; ?></p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Location Details:</strong> <?php echo $location; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN CONTENT END -->
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
