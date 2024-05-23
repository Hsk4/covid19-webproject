<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../partials/links.php'); ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Added margin between cards */
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        .result-item {
            transition: transform 0.2s;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff;
        }

        .result-item:hover {
            transform: scale(1.05);
        }

        .section__content {
            margin-left: 250px; /* Adjust based on your sidebar width */
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .picture-box {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .picture-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container-centered {
            max-width: 800px;
            width: 100%;
            padding: 15px;
            margin: 30px; /* Added margin for spacing */
        }

        .patient-info {
            display: flex;
            align-items: center;
        }

        .patient-info h3 {
            font-size: 20px;
            margin-right: 10px;
            color: #333;
        }

        .patient-info p {
            font-size: 16px;
            color: #666;
            margin-right: 10px;
        }

        .status-approved {
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- SIDEBAR START -->
    <?php include('../partials/sidebarforhospitalpage.php'); ?>
    <!-- SIDEBAR END -->

    <!-- NAVBAR START -->
    <?php include '../partials/navbar.php'; ?>
    <!-- NAVBAR END -->

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-centered">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center text-2xl font-bold">Search Filter</h2>
                        <div class="mb-3">
                            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                        </div>
                        <div id="results">
                            <?php
                            include 'C:\xampp\htdocs\covid19-webproject\connections\conn_patient.php';
                            $sql = "SELECT * FROM registrations WHERE status='approved' ORDER BY patientName ASC"; // Fetch only approved appointments and order by patientName in ascending order
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="result-item bg-white p-4 rounded shadow">';
                                    echo '<div class="patient-info">';
                                    echo '<div class="picture-box me-3">';
                                    echo '<img src="path/to/default/image.jpg" alt="Picture">'; // Replace with actual image path or URL
                                    echo '</div>';
                                    echo '<div>';
                                    echo '<h3>Name: ' . $row["patientName"] . '</h3>';
                                    echo '<p>Address: ' . $row["address"] . '</p>';
                                    echo '<p>Details: ' . $row["locationDetails"] . '</p>';
                                    echo '<p>Status: <span class="status-approved">' . $row["status"] . '</span></p>'; // Apply class for approved status
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo '<div class="result-item bg-white p-4 rounded shadow">';
                                echo '<p class="text-gray-700">No results found.</p>';
                                echo '</div>';
                            }

                            $conn->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap
