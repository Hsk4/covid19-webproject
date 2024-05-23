<?php
include('../sessionmanager/session_manager.php');
?>
<?php
session_start();

// Check if user is not logged in, redirect to login page

include '../connections/db.php';

// Function to clean data for XLS output
function cleanData($data) {
    $data = str_replace("\r", "", $data);
    $data = str_replace("\n", "", $data);
    return $data;
}

if (isset($_POST['export'])) {
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="appointments.xls"');

    $output = fopen('php://output', 'w');

    // Output table header
    fputcsv($output, array('ID', 'Name', 'Email', 'Phone', 'Date', 'Department', 'Message'));

    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        fputcsv($output, array(
            $row['id'],
            cleanData($row['name']),
            cleanData($row['email']),
            cleanData($row['phone']),
            cleanData($row['date']),
            cleanData($row['department']),
            cleanData($row['message'])
        ));
    }

    fclose($output);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests recieved</title>
    <?php include('../partials/links.php'); ?>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #007bff;
    }

    label {
        font-weight: bold;
    }
</style>

<body>
    <!-- SIDEBAR START -->
    <?php include('../partials/sidebarforhospitalpage.php'); ?>
    <!-- SIDEBAR END -->

    <!-- NAVBAR STRAT-->
    <?php include '../partials/navbar.php'; ?>
    <!-- NAVBAR END-->

    <div class="main-content ">
        <div class="section__content section__content--p30">
            <div class="container mt-5">
                <h2>Appointment List</h2>
                <form method="post">
                    <button type="submit" name="export" class="btn btn-primary mb-3">Export to XLS</button>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM appointments";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row["id"] . '</td>';
                                echo '<td>' . $row["name"] . '</td>';
                                echo '<td>' . $row["email"] . '</td>';
                                echo '<td>' . $row["phone"] . '</td>';
                                echo '<td>' . $row["date"] . '</td>';
                                echo '<td>' . $row["department"] . '</td>';
                                echo '<td>' . $row["message"] . '</td>';
                                echo '<td>';
                                echo '<form action="approve.php" method="post" style="display:inline-block;">';
                                echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                                echo '<button type="submit" class="btn btn-success">Approve</button>';
                                echo '</form>';
                                echo ' ';
                                echo '<form action="reject.php" method="post" style="display:inline-block;">';
                                echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                                echo '<button type="submit" class="btn btn-danger">Reject</button>';
                                echo '</form>';
                                echo '</td>';
                                // Export button for each row
                                echo '<td>';
                                echo '<form method="post">';
                                echo '<input type="hidden" name="export" value="1">';
                                echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                                echo '<button type="submit" class="btn btn-primary">Export</button>';
                                echo '</form>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="8">No results found.</td></tr>';
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
