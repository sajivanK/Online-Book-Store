<?php
// addbook.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebookdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $genre = $conn->real_escape_string($_POST['genre']);
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "INSERT INTO books (title, author, genre, description) VALUES ('$title', '$author', '$genre', '$description')";

    if ($conn->query($sql) === TRUE) {
        $message = "New book added successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a New Book</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            padding: 10px;
            width: 300px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .message {
            margin-top: 20px;
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add a New Book</h1>
        <form method="POST" action="addbook.php">
            <input type="text" name="title" placeholder="Book Title" required><br>
            <input type="text" name="author" placeholder="Author" required><br>
            <input type="text" name="genre" placeholder="Genre" required><br>
            <textarea name="description" placeholder="Description" required></textarea><br>
            <button type="submit">Add Book</button>
        </form>
        <?php
        if (!empty($message)) {
            echo '<div class="message">' . $message . '</div>';
        }
        ?>
    </div>
</body>
</html>
