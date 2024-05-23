
    <?php if (isset($_SESSION["username"]) && isset($_SESSION["email"])): ?>
        <p class="success-message">Thank you, <?php echo $_SESSION["username"]; ?>, for registering with email <?php echo $_SESSION["email"]; ?>!</p>
    <?php endif; ?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Neon login Form</title>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #0a0a0a;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
    padding: 30px;
    text-align: center;
}

h2 {
    color: #fff;
    font-weight: 400;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    width: calc(100% - 20px);
    padding: 15px;
    margin-bottom: 20px;
    border: none;
    border-radius: 30px;
    box-sizing: border-box;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
    text-align: center;
    outline: none;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
button:focus {
    background-color: rgba(255, 255, 255, 0.3);
}

button {
    background-color: #ff4d4d;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #ff6666;
}

.error-message {
    color: #ff4d4d;
    margin-bottom: 10px;
}

.success-message {
    color: #00ff00;
    margin-bottom: 10px;
}
</style>
</head>
<body>



<div class="container">
    <h2>Neon Login</h2>
    <form action="inbox.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">login</button>
        <small>Already registered? <a href="loginasadmin.php">Login Here</a></small>
    </form>
</div>

</body>
</html>
<?php
// Clear session variables
session_unset();
session_destroy();
?>