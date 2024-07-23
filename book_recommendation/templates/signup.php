<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f2f2f2;
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
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      background: rgba(255, 255, 255, 0.15); /* Transparent background */
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px); /* Glassmorphic effect */
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    h1 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }

    .cancelbtn,
    .signupbtn {
      float: left;
      width: 50%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .cancelbtn {
      background-color: #f44336;
      color: #fff;
    }

    .signupbtn {
      background-color: #04AA6D;
      color: #fff;
    }

    .cancelbtn:hover,
    .signupbtn:hover {
      opacity: 0.8;
    }

    .terms {
      text-align: center;
    }

    .terms a {
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
  <h1>Sign Up</h1>
  <form method="post" action="signup.php">
    <label for="email">Email</label>
    <input type="text" id="email" placeholder="Enter Email" name="email" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat">Repeat Password</label>
    <input type="password" id="psw-repeat" placeholder="Repeat Password" name="psw-repeat" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </form>

  <p class="terms">
    Already have an account? <a href="login.php" style="color:dodgerblue">Log In</a>
  </p>
</div>

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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["psw"];

    // Insert user data into the database
    $sql = "INSERT INTO $table (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

</body>
</html>
