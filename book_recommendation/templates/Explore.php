<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_recommendation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Default sort column
$sort_column = 'id';
$sort_order = 'ASC';

// Check if sort parameters are set
if (isset($_GET['sort']) && isset($_GET['order'])) {
    $sort_column = $_GET['sort'];
    $sort_order = $_GET['order'] == 'ASC' ? 'ASC' : 'DESC';
}

// Fetch data from the database
$sql = "SELECT id, Title, Author, Genre, SubGenre, UserRating FROM book ORDER BY $sort_column $sort_order";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Explore Books</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-image: url('http://localhost/book_recommendation/templates/img.jpg');
            color: white;
            background-attachment: fixed;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #C738BD;
            color: white;
            cursor: pointer;
        }

        th:hover {
            background: #C738BD;
        }

        tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.1);
        }

        tr:hover {
            background: white;
            color: black;
        }

        th a {
            color: white;
            text-decoration: none;
        }

        th a:hover {
            text-decoration: underline;
        }

        .sort-button {
            background-color: #074173;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 1rem;
            margin: 5px;
        }

        .sort-button:hover {
            background-color: #093E7A;
        }
    </style>
</head>
<body style="background-position: center center; background-size: cover; background-repeat: repeat; min-height: 100vh;">
    <div class="container">
        <h1>Explore Books</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th><a href="?sort=id&order=<?php echo $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">ID</a></th>
                        <th><a href="?sort=Title&order=<?php echo $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">Title</a></th>
                        <th><a href="?sort=Author&order=<?php echo $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">Author</a></th>
                        <th><a href="?sort=Genre&order=<?php echo $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">Genre</a></th>
                        <th><a href="?sort=SubGenre&order=<?php echo $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">SubGenre</a></th>
                        <th><a href="?sort=UserRating&order=<?php echo $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">User Rating</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"]. "</td>";
                            echo "<td>" . $row["Title"]. "</td>";
                            echo "<td>" . $row["Author"]. "</td>";
                            echo "<td>" . $row["Genre"]. "</td>";
                            echo "<td>" . $row["SubGenre"]. "</td>";
                            echo "<td>" . $row["UserRating"]. "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No records found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
