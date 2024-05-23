<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval Hospital Login</title>
    <?php 
    $links_path = '../partials/links.php';
    if (file_exists($links_path)) {
        include($links_path);
    } else {
        echo '<!-- Links file not found -->';
    }
    ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .btn {
            margin-right: 5px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table th, table td {
            text-align: center;
            padding: 8px;
        }

        .action-buttons form {
            display: inline-block;
            margin: 0 5px 5px 0;
        }
    </style>
</head>

<body>
    <!-- SIDEBAR START -->
    <?php
    $sidebar_path = '../partials/sidebar.php';
    if (file_exists($sidebar_path)) {
        include($sidebar_path);
    } else {
        echo '<!-- Sidebar file not found -->';
    }
    ?>
    <!-- SIDEBAR END -->

    <!-- NAVBAR START -->
    <?php 
    $navbar_path = '../partials/navbar.php';
    if (file_exists($navbar_path)) {
        include($navbar_path);
    } else {
        echo '<!-- Navbar file not found -->';
    }
    ?>
    <!-- NAVBAR END -->
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container">
                    <h2>Appointment List</h2>
                    <table id="appointmentsTable" class="display">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>patientName</th>
                                <th>address</th>
                                <th>locationDetails</th>
                                <th>status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('C:\xampp\htdocs\covid19-webproject\connections\conn_patient.php');

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if(isset($_POST['id'])) {
                                    $appointment_id = $_POST['id'];
                                    $status = $_POST['action']; // Get action (approve or reject)
                                    
                                    // Update appointment status in the database
                                    $sql = "UPDATE registrations SET status='$status' WHERE id=$appointment_id";
                                    if ($conn->query($sql) === TRUE) {
                                        // Redirect to current page to refresh the data
                                        header('Location: ' . $_SERVER['PHP_SELF']);
                                        exit();
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                    
                                    $conn->close();
                                }
                            }

                            $sql = "SELECT * FROM registrations";
                            $result = $conn->query($sql);
                            $count = 1; // Initialize count variable

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . $count++ . '</td>'; // Display count instead of ID
                                    echo '<td>' . $row["patientName"] . '</td>';
                                    echo '<td>' . $row["address"] . '</td>';
                                    echo '<td>' . $row["locationDetails"] . '</td>';
                                    echo '<td>' . $row["status"] . '</td>';
                                   
                                    echo '<td class="action-buttons">';
                                    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';
                                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                                    echo '<button type="submit" name="action" value="approved" class="btn btn-success">Approve</button>';
                                    echo '<button type="submit" name="action" value="rejected" class="btn btn-danger">Reject</button>';
                                    echo '</form>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="6">No results found.</td></tr>';
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#appointmentsTable').DataTable();
        });
    </script>
</body>

</html>
