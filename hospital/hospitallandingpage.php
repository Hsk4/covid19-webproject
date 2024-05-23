<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Landing Page</title>
    <link href="../css/datatables.css" rel="stylesheet">
    <?php include ('../partials/links.php'); ?>
    <style>
        body {
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            height: 100vh; /* Set the height of the body to full viewport height */
        }
        .carousel-container {
            max-width: 800px; /* Adjust the maximum width of the carousel container */
            width: 100%; /* Ensure the carousel takes up the full width */
            margin: auto; /* Center the carousel horizontally */
        }
        .carousel {
            width: 100%;
        }
    </style>
</head>
<body>

<?php include('../partials/sidebarforhospitalpage.php'); ?>
<!-- SIDEBAR END -->

<?php include '../partials/navbar.php'; ?>
<!-- NAVBAR END-->
<div class="page-container">
    <div class="carousel-container">
        <!-- Carousel Start -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/a.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- Carousel End -->
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
