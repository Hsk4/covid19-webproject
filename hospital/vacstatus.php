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
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        
        .container {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        
        h1 {
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #4b5cc0;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #5462b1;
            border-radius: 3px;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            background-color: #007bff;
            color: #eaecf0;
            padding: 20px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
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
        <h1>COVID-19 Vaccination Status Update</h1>
        <form action="/update_vaccination_status" method="post">
            <label for="patient_name">Patient Name:</label>
            <input type="text" id="patient_name" name="patient_name" required><br><br>

            <label for="status">Vaccination Status:</label><br>
            <select id="status" name="status" required>
                <option value="vaccinated">Vaccinated</option>
                <option value="not_vaccinated">Not Vaccinated</option>
            </select><br><br>

            <button type="submit">Update Status</button>
        </form>
    </div>
        </div>
    </div>
</body>

</html>