<?php
include('../sessionmanager/session_manager.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../partials/links.php'); ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const results = document.getElementById('results');
            const resultItems = Array.from(document.getElementsByClassName('result-item'));

            searchInput.addEventListener('input', () => {
                const query = searchInput.value.toLowerCase();
                resultItems.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(query)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
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
            margin-right: 20px;
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

        .card-body {
            padding: 20px;
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
                            include '../connections/db.php';
                            $sql = "SELECT * FROM appointments";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="card result-item bg-white rounded shadow">';
                                    echo '<div class="card-body">';
                                    echo '<div class="d-flex align-items-center">';
                                    echo '<div class="picture-box">';
                                    echo '<img src="path/to/default/image.jpg" alt="Picture">'; // Replace with actual image path or URL
                                    echo '</div>';
                                    echo '<div>';
                                    echo '<h3 class="card-title">' . $row["name"] . '</h3>';
                                    echo '<p class="card-text">Email: ' . $row["email"] . '</p>';
                                    echo '<p class="card-text">Phone: ' . $row["phone"] . '</p>';
                                    echo '<p class="card-text">Date: ' . $row["date"] . '</p>';
                                    echo '<p class="card-text">Department: ' . $row["department"] . '</p>';
                                    echo '<p class="card-text">Message: ' . $row["message"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo '<div class="card result-item bg-white rounded shadow">';
                                echo '<div class="card-body">';
                                echo '<p class="card-text">No results found.</p>';
                                echo '</div>';
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
