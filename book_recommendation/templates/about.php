<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Book Recommendation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            background: url('http://localhost/book_recommendation/templates/wp2036927-books-wallpapers.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .nav {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .nav a {
            text-decoration: none;
            font-size: 1.2em;
            color: #fff;
            padding: 10px 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            transition: background 0.3s, color 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
        }

        .nav a:hover {
            background: rgba(255, 255, 255, 0.7);
            color: #333;
            transform: rotate(360deg);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100vh;
            color: #fff;
            z-index: 1;
            flex-direction: column;
        }

        .content {
            background: rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            color: #fff;
            animation: fallDown 1s ease-out;
            opacity: 0.9;
        }

        p {
            font-size: 1.2em;
            color: #fff;
            animation: fallDown 1.5s ease-out 0.5s;
            opacity: 0.9;
            animation-fill-mode: forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fallDown {
            0% {
                transform: translateY(-100px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body style="background-image: url('http://localhost/book_recommendation/templates/wp2036927-books-wallpapers.jpg');>
    <div class="nav">
        <a href="http://localhost/book_recommendation/templates/home.php">Home</a>
    </div>

    <div class="container">
        <div class="content">
            <h1>About Us</h1>
            <p>Welcome to our Book Recommendation platform, a haven for book lovers seeking personalized reading suggestions. Our site is integrated with an advanced machine learning model that analyzes your preferences and provides tailored book recommendations. Dive into the world of books with us and explore genres and titles that resonate with your taste. Whether you're looking for fiction, non-fiction, fantasy, or any other genre, our intelligent system is here to guide you to your next great read. Join us on this literary journey and let your reading adventures begin!</p>
        </div>
    </div>
</body>
</html>
