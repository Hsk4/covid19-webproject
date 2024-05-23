


<?php
session_start();

// Check if user is not logged in, redirect to login page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    include('../partials/links.php');
    ?>
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

    .result {
        font-size: 24px;
        font-weight: bold;
        margin-top: 20px;
    }

    .result.positive {
        color: #dc3545;
    }

    .result.negative {
        color: #28a745;
    }
</style>

<body>
    <!-- SIDEBAR START -->
    <?php

    include('../partials/sidebarforhospitalpage.php');

    ?>
    <!-- SIDEBAR END -->


    <!-- NAVBAR STRAT-->
    <?php

    include '../partials/navbar.php';



    ?>
    <!-- NAVBAR END-->






    <div class="main-content ">
        <div class="section__content section__content--p30">



            <div class="container">
                <h2 class="mb-4">COVID-19 Test Result</h2>
                <div class="result positive">Positive</div>
                <p>
                    Dear [Patient's Name],
                </p>
                <p>
                    We regret to inform you that your COVID-19 test result has returned positive. Please follow the guidelines provided by health authorities and self-isolate to prevent further spread of the virus.
                </p>
                <p>
                    If you develop severe symptoms such as difficulty breathing, persistent chest pain, confusion, or bluish lips/face, seek medical attention immediately.
                </p>
                <p>
                    For any further assistance or questions, please contact our healthcare provider.
                </p>
                <hr>
                <p class="text-muted">This message was automatically generated. Please do not reply.</p>
            </div>


        </div>
    </div>
</body>

</html>