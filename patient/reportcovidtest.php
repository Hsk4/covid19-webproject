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
    .profile-card {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
  <h2 class="mb-4">COVID-19 Test / Vaccination Report</h2>
  <div class="report">
    <h3>COVID-19 Test Result</h3>
    <p><strong>Date of Test:</strong> May 15, 2024</p>
    <p><strong>Test Result:</strong> <span class="badge positive">Positive</span></p>
    <p><strong>Suggestion:</strong> Please self-isolate and follow guidelines provided by health authorities. Seek medical attention if symptoms worsen.</p>
  </div>

  <hr>

  <div class="report">
    <h3>Vaccination Information</h3>
    <p><strong>Vaccine Type:</strong> Pfizer</p>
    <p><strong>Date of Vaccination:</strong> April 30, 2024</p>
    <p><strong>Next Vaccination Date:</strong> May 21, 2024</p>
    <p><strong>Suggestion:</strong> Continue following safety measures and adhere to vaccination schedules for complete protection.</p>
  </div>
</div>


                </div>
            </div>




            
           

</body>
</html>