<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_recommendation";
$table = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$email = "";
$id = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["psw"];

    // Sanitize inputs to prevent SQL injection (consider using prepared statements)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Retrieve user data from the database
    $sql = "SELECT * FROM $table WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Redirect to Flask app for book recommendations with email and user ID as URL parameters
        $email = $row["email"];
        $id = $row["id"];
        header("Location: http://127.0.0.1:5000/?email=$email&id=$id");
        exit();
    } else {
        echo "<p>Incorrect email or password.</p>";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    body, html {
        height: 100%;
        margin: 0;
        overflow: hidden;
        font-family: Arial, Helvetica, sans-serif;
    }

    .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .container {
        position: relative;
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.15); /* Transparent background */
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px); /* Glassmorphic effect */
        border: 1px solid rgba(255, 255, 255, 0.3);
        z-index: 1;
    }

    .container h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 16px;
    }

    .container input[type=text], .container input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .container button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        border-radius: 25px;
    }

    .container button:hover {
        opacity: 1;
    }

    .container .cancelbtn {
        background-color: #f44336;
    }

    .container .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .container .psw {
        float: right;
    }

    .container .psw a {
        color: dodgerblue;
    }

  </style>
</head>
<body>

<video class="video-background" autoplay muted loop>
    <source src="4763210-hd_1920_1080_25fps.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="container">
  <h1>Login</h1>
  <form method="post" action="login.php">
    <label for="email">Email</label>
    <input type="text" id="email" placeholder="Enter Email" name="email" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Login</button>
    </div>
  </form>

  <p class="terms">
    Don't have an account? <a href="signup.php" style="color:dodgerblue">Sign Up</a>
  </p>
</div>

</body>
</html>
