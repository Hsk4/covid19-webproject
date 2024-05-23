<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
     
     include ('../partials/links.php') ; 
     
     
     
     ?>
</head>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
<body>

<!-- MENU SIDEBAR-->

<?php
       
       include('../partials/sidebar.php');
       
       ?>

<!-- MENU SIDEBAR end-->



 <!-- NAVBAR -->
 <div class="page-container">
            <!-- HEADER DESKTOP-->
           <?php
           
           include '../partials/navbar.php';
           
           
           
           ?>
        <!-- NAVBAR -->



        <div class="main-content ">
                <div class="section__content section__content--p30">


                <div class="container">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">COVID Test Report</h5>
      </div>
      <div class="card-body">
        <form id="testReportForm">
          <div class="form-group">
            <label for="patientName">Patient Name</label>
            <input type="text" class="form-control" id="patientName" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="testDate">Test Date</label>
            <input type="date" class="form-control" id="testDate" required>
          </div>
          <button type="submit" class="btn btn-primary">Get Test Report</button>
        </form>
        <div id="testReport" class="mt-4" style="display: none;">
          <h5>Test Report</h5>
          <p id="reportContent"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    document.getElementById('testReportForm').addEventListener('submit', function(e) {
      e.preventDefault();
      var patientName = document.getElementById('patientName').value;
      var testDate = document.getElementById('testDate').value;

      // Here you can fetch the test report data using AJAX or generate it dynamically
      // For this example, let's assume the report is hardcoded
      var reportContent = `
        <strong>Patient Name:</strong> ${patientName}<br>
        <strong>Test Date:</strong> ${testDate}<br>
        <strong>Test Result:</strong> Negative<br>
        <strong>Test Type:</strong> PCR<br>
        <strong>Test Center:</strong> City Hospital
      `;
      document.getElementById('reportContent').innerHTML = reportContent;
      document.getElementById('testReport').style.display = 'block';
    });
  </script>






</div>
</div>
    
</body>
</html>