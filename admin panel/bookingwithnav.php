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
<body>
<!-- MENU SIDEBAR-->
        
     <?php
       
       include('../partials/sidebar.php');
       
       ?>


        <!-- END MENU SIDEBAR-->
    

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
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="text-center">Schedule Doctor Appointment</h2>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
          <label for="doctor">Select Doctor:</label>
          <select class="form-control" id="doctor">
            <option>Dr. Abdullah</option>
            <option>Dr. Faaiz</option>
            <option>Dr. Hammad</option>
            <option>Dr. Amjad</option>
          </select>
        </div>
        <div class="form-group">
          <label for="date">Select Date:</label>
          <input type="date" class="form-control" id="date">
        </div>
        <div class="form-group">
          <label for="time">Select Time:</label>
          <input type="time" class="form-control" id="time">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Schedule Appointment</button>
      </form>
    </div>
  </div>
</div>



</div>
</div>

</body>
</html>