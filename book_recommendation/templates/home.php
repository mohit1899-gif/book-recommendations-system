<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Recommendation</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .nav-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 28px;
            box-sizing: border-box;
            z-index: 10;
            background: transparent;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        .nav-buttons ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-buttons li {
            margin-right: 20px; /* Adjusted margin for smaller buttons */
        }

        .nav-link {
            color: white;
            font-weight: 500;
            padding: 0.5rem 1rem; /* Smaller padding */
            text-transform: uppercase; /* Transform text to uppercase */
            transition: color 0.3s, text-shadow 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center; /* Center text within the link */
            font-size: 0.875rem; /* Smaller font size */
            background-color: transparent;
            border-bottom: 2px solid transparent;
        }

        .nav-link:hover {
            color: transparent;
            text-shadow: 0 0 0 white, 
                         0 0 5px white, 
                         0 0 10px white;
        }

        .hero {
            position: absolute;
            top: 50%;
            left: 50px;
            transform: translateY(-50%);
            text-align: left;
            color: white;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: bold;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            transition: color 0.3s, text-shadow 0.3s;
        }

        .hero h1:hover {
            color: transparent;
            text-shadow: 0 0 0 white, 
                         0 0 5px white, 
                         0 0 10px white;
        }

        .hero p {
            font-family: 'Roboto', sans-serif;
            margin-top: 1rem;
            font-size: 1.125rem;
            line-height: 1.8;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
        }

        .button-container {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }

        .button-container a.button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 3rem;
            padding: 1rem 2rem;
            font-weight: 500;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s, text-shadow 0.3s;
        }

        .button-container a.button:hover {
            color: transparent;
            text-shadow: 0 0 0 white, 
                         0 0 5px white, 
                         0 0 10px white;
        }

        .button-container a.button:not(:last-child) {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <video class="video-background" autoplay muted loop>
        <source src="4763210-hd_1920_1080_25fps.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container min-h-screen flex flex-col justify-start">
        <div class="nav-container">
            <img src="images/logo3.png" class="cursor-pointer logo">
            <nav class="nav-buttons flex items-center justify-between py-2 px-8">
                <ul class="flex space-x-6 text-lg font-medium">
                    <li><a href="http://localhost/book_recommendation/templates/home.php" class="nav-link">Home</a></li>
                    <li><a href="http://localhost/book_recommendation/templates/about.php" class="nav-link">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="hero max-w-xl">
            <h1>Book Recommendations<br>Wisdom in Your Hands</h1>
            <p>
                Discover your next favorite read with our personalized book recommendations! Our website
                curates the best books tailored to your unique tastes, ensuring every page-turner is a perfect match. 
                Dive into a world of literary adventures, from timeless classics to the latest bestsellers. 
                Join our community of book lovers and never run out of great reads again. 
                Start your literary journey with us today!
            </p>
            <div class="button-container">
                <a href="http://localhost/book_recommendation/templates/login.php" class="button">Get Started</a>
                <a href="http://localhost/book_recommendation/templates/Explore.php" class="button">Explore</a>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
