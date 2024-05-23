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
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .result-card {
      margin-bottom: 20px;
    }  </STyle>
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
  <h2>COVID-19 Test Results</h2>

  <div class="card result-card">
    <div class="card-body">
      <h5 class="card-title">John Doe</h5>
      <p class="card-text">Test Result: Positive</p>
      <p class="card-text">Date of Test: April 25, 2024</p>
    </div>
  </div>

  <div class="card result-card">
    <div class="card-body">
      <h5 class="card-title">Jane Smith</h5>
      <p class="card-text">Test Result: Negative</p>
      <p class="card-text">Date of Test: April 26, 2024</p>
    </div>
  </div>

  <div class="card result-card">
    <div class="card-body">
      <h5 class="card-title">David Johnson</h5>
      <p class="card-text">Test Result: Positive</p>
      <p class="card-text">Date of Test: April 27, 2024</p>
    </div>
  </div>
</div>



                </div>
            </div>




            
           

</body>
</html>