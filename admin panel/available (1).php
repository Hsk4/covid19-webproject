<?php
// connect to the database
$servername ="localhost";
$username ="root";
$userpassword  ="";
$database="crud";

// create connection
$conn = mysqli_connect($servername, $username, $userpassword, $database);

// die if connection was not successful
if(!$conn){
  die("Sorry, failed to connect: ".mysqli_connect_error());
}
else{
  echo "Connection was successful <br>";
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `crud` (`username`, `userpassword`) VALUES ('$name', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- links -->
    <?php
     
     include ('../partials/links.php') ; 
     
     
     
     ?>
<!-- links -->

</head>
<body>
     <!-- MENU SIDEBAR-->
        
     <?php
       
       include('../partials/sidebar.php');
       
       ?>


        <!-- END MENU SIDEBAR-->


          <!-- HEADER DESKTOP-->
          <?php
           
           include '../partials/navbar.php';
           
           
           
           ?>
            <!-- END HEADER DESKTOP-->




            <div class="main-content ">
                <div class="section__content section__content--p30">

                <div class="container my-5">
      <!-- Form to add new data -->
      <h2>Add New Data</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Fetch and display data from database
          $sql = "SELECT * FROM `crud`";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th scope='row'>" . $row['user id'] . "</th>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['userpassword'] . "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>






                </div>
                </div>



</body>
</html>