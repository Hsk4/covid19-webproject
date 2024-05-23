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
    .form-group label {
      font-weight: bold;
    }
    .status {
      margin-top: 20px;
    }
    .status .badge {
      font-size: 16px;
      padding: 8px 12px;
      border-radius: 4px;
    }
    .status.pending {
      background-color: #ffc107;
      color: #212529;
    }
    .status.approved {
      background-color: #28a745;
      color: #fff;
    }
    .status.rejected {
      background-color: #dc3545;
      color: #fff;
    }
    </STyle>
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
  <h2 class="mb-4">Covid Vaccination Status</h2>
  <div class="status mt-4" id="statusSection">
    <h3>Your Vaccination Status:</h3>
    <span class="badge" id="statusBadge">Pending</span>
    <p id="statusMessage">Your vaccination status is pending. Please check back later.</p>
  </div>

  <hr>

  <h3>Update Your Vaccination Status</h3>
  <form id="vaccinationForm">
    <div class="form-group">
      <label for="fullName">Full Name:</label>
      <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
    </div>
    <div class="form-group">
      <label for="vaccinationStatus">Vaccination Status:</label>
      <select class="form-control" id="vaccinationStatus" required>
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
        <option value="not_received">Not Received</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Status</button>
  </form>
</div>


                </div>
            </div>




            
            <script>
  // Handle form submission
  document.getElementById("vaccinationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    // Get form values
    var fullName = document.getElementById("fullName").value;
    var vaccinationStatus = document.getElementById("vaccinationStatus").value;
    // Update status message
    var statusSection = document.getElementById("statusSection");
    var statusBadge = document.getElementById("statusBadge");
    var statusMessage = document.getElementById("statusMessage");
    statusSection.style.display = "block";
    statusBadge.textContent = vaccinationStatus.charAt(0).toUpperCase() + vaccinationStatus.slice(1);
    statusBadge.classList.remove("pending", "completed", "not_received");
    statusBadge.classList.add(vaccinationStatus);
    statusMessage.textContent = "Dear " + fullName + ", your vaccination status has been updated to " + vaccinationStatus + ".";
  });
</script>

</body>
</html>