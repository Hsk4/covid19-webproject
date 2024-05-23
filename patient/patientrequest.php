<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include ('../partials/links.php');
    ?>
    <STyle>
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
    }    </STyle>
</head>

<body>
    
    <!-- MENU SIDEBAR-->
        
    <?php
    
    include('../partials/sidebar.php');
    
    ?>


     <!-- END MENU SIDEBAR-->





 <!-- NAVBAR START -->
 <div class="page-container">
            <!-- HEADER DESKTOP-->
           <?php
           
           include '../partials/navbar.php';
           
           
           
           ?>
            <!-- NAVBAR END-->







            <div class="main-content ">
                <div class="section__content section__content--p30">
             

             
<div class="container">
  <div class="profile-card">
    <img src="https://via.placeholder.com/150" class="card-img-top profile-img" alt="Profile Picture">
    <div class="patient-info">
      <h5 class="card-title text-center">Patient Information</h5>
      <hr>
      <p><strong>Name:</strong> John Doe</p>
      <p><strong>Age:</strong> 45 years</p>
      <p><strong>Gender:</strong> Male</p>
      <p><strong>Address:</strong> 123 Main Street, Cityville, Country</p>
      <p><strong>Contact:</strong> +1234567890</p>
      <p><strong>Emergency Contact:</strong> +9876543210</p>
      <hr>
      <h5 class="card-title text-center">COVID-19 Information</h5>
      <hr>
      <p><strong>Status:</strong> Positive</p>
      <p><strong>Date of Diagnosis:</strong> May 15, 2024</p>
      <p><strong>Symptoms:</strong> Fever, Cough, Shortness of Breath</p>
      <p><strong>Current Condition:</strong> Stable</p>
    </div>
  </div>
</div>



                </div>
            </div>




            
           

</body>
</html>