<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Background animation */
        body {
            position: relative;
            background-image: url('covid19.jpg');
            background-size: cover;
            background-position: center;
            animation: background-slide 20s linear infinite alternate; /* Adjust animation duration and timing as needed */
        }

.neon-text {
    text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00, 0 0 70px #00ff00, 0 0 80px #00ff00, 0 0 100px #00ff00, 0 0 150px #00ff00;
    color: white; /* Set text color to white */
}
        @keyframes background-slide {
            0% {
                background-position: 0% 0%;
            }
            100% {
                background-position: 100% 100%;
            }
        }

        /* COVID-19 image */
        .covid-img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px; /* Adjust width as needed */
            z-index: -1; /* Place behind other content */
            filter: blur(20%); /* Apply blur effect */
        }


        .login-container {
            border: 2px solid #e5e7eb; /* Border color and size */
            border-radius: 0.5rem; /* Rounded corners */
            width: 24rem; /* Container width */
            padding: 1.5rem; /* Padding */
            background-color: rgba(255, 255, 255, 0.9); /* Background color with transparency */
            font-family: 'Arial', sans-serif; /* Change font to Arial */
        }
        .login-card {
            height: 8rem; /* Height of login cards */
        }
        .font-b{
            
            filter: drop-shadow(0 0 5rem black);
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen relative">
    <!-- COVID-19 image -->
    <img src="https://cdn.pixabay.com/photo/2020/12/08/20/07/coronavirus-5812645_960_720.png" alt="COVID-19" class="covid-img">

    <div class="text-center animate__animated animate__fadeIn">
        <div class="login-container p-4">
            <h1  class="text-3xl font-b mb-6 text-primary" >Login</h1>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeIn login-card">
                    <h2 class="text-2xl font-semibold mb-4">Admin</h2>
                    <a href="../hospital/" class="btn btn-primary w-full py-2">Login as Admin</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeIn login-card">
                    <h2 class="text-2xl font-semibold mb-4">Hospital</h2>
                    <a href="../covid19-webproject/hospital/loginashospital.php" class="btn btn-success w-full py-2">Login as Hospital</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeIn login-card">
                    <h2 class="text-2xl font-semibold mb-4">Patient</h2>
                    <a href="patient-login.html" class="btn btn-info w-full py-2">Login as Patient</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
